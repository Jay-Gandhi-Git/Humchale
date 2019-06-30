<?php

namespace App\Http\Controllers\Humchale;

use App\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HumchaleUserController extends Controller
{


    //
    public function userProfile(Request $request){
        $userId=session()->get('UserId');
        if($userId!=null)
        {
            return view('ManageUser.User_Profile');
        }
        else{
            return redirect('/');
        }
    }


    //Get profile data code starts here
    public function getProfileData(Request $request){
        try{
            $userId=session()->get('UserId');
            if($userId!=null)
            {
                $userData=DB::table('persons')
                    ->where('person_id','=',$userId)
                    ->first();
                return response()->json(['msg'=>$userData]);
            }
            else{
                return response()->json(['msg'=>'Session Expired']);
            }
        }catch (\Exception $e)
        {
            return response()->json(['msg'=>'Error Data '.$e]);
        }
    }
    //Get profile data code ends here



    //Update profile code starts here
    public function updateProfile(Request $request){
        $userId=session()->get('UserId');
        if($userId!=null)
        {
            if($request->ajax())
            {
                if($request->hasFile('profile_photo'))
                {
                    $file=$request->file('profile_photo');
                    if($file)
                    {

                        //Create the Email name folder in Uploaded folder(Email Folder will be unique)
                        $temp_Email=Person::where('person_id',$userId)->value('email');
                        $temp_Profile=Person::where('person_id',$userId)->value('profile_picture');
                        if($temp_Profile!=null)
                        {
                            File::delete('Uploaded/'.$temp_Email.'/UserProfile/'.$temp_Profile);
                        }

                        $date=Carbon::now()->toDateString();
                        $new_name=$date.'_'.'UserProfilePic_'.$file->getClientOriginalName();
                        $file->move('Uploaded/'.$temp_Email.'/UserProfile',$new_name);
                        $gen = 0;
                        if ($request->profile_gender == "Male") {
                            $gen = 1;
                        } else if ($request->profile_gender == "Female") {
                            $gen = 0;
                        }
                        DB::table('persons')->where('person_id','=',$userId)
                            ->update([
                                'full_name'=>$request->profile_fullname,
                                'address'=>$request->profile_address,
                                'pincode'=>$request->profile_pincode,
                                'mobile_no'=>$request->profile_mobileno,
                                'gender'=>$gen,
                                'aadhar_card_no'=>$request->profile_aadharcard,
                                'profile_picture'=>$new_name
                            ]);

                        return response()->json(['msg'=>'successful']);

                    }
                    else
                    {return response()->json(['msg'=>'Please upload image']);}
                }
                else
                {return response()->json(['msg'=>'Please upload image']);}
            }

        }
        else{
            return response()->json(['msg'=>'Session Expired']);
        }
    }
    //Update profile code ends here

    //Add trips page call starts here
    public function addTrips(Request $request)
    {
        return view('ManageUser.addTrip');
    }
}
