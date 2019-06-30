<?php

namespace App\Http\Controllers\Humchale;

use App\Mail\otpMail;
use App\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HumchaleController extends Controller
{
    //
    public function login(Request $request)
    {
        try {
            $user = DB::table('persons')->where('email', $request->email)->where('password', $request->password)->get();
            if (count($user) > 0) {
                $userId=Person::where('email',$request->email)->where('password',$request->password)->where('is_active',0)->value('person_id');
                session()->put('UserId', $userId);
                return response()->json(['msg' => "Successfully Login"]);
            } else {
                return response()->json(['msg' => "Invalid username or password"]);
            }
        }
        catch (Exception $e)
        {
            return response()->json(['msg' => 'Error '+$e]);
        }
    }

    public function registration(Request $request)
    {
        try {
            $otp = session()->get('sendOTP');
            if ($otp == $request->otp) {
                $emailChk = Person::get()->where('email', $request->email);
                if (count($emailChk) > 0) {
                    return response()->json(['msg' => 'Email is already exist']);
                } else {
                    $gen = 0;
                    $userdata = new Person();
                    $userdata->full_name = $request->name;
                    $userdata->address = $request->address;
                    $userdata->pincode = $request->pincode;
                    $userdata->email = $request->email;
                    $userdata->password = $request->password;
                    $userdata->mobile_no = $request->mobile;
                    if ($request->gender == "Male") {
                        $gen = 1;
                    } else if ($request->gender == "Female") {
                        $gen = 0;
                    }
                    $userdata->gender = $gen;
                    $userdata->aadhar_card_no = $request->aadharcard;
                    $userdata->activation_date = Carbon::now();
                    $userdata->validity = Carbon::now()->addMonths(6);
                    $userdata->profile_picture = "";
                    $userdata->is_active = false;
                    Storage::makeDirectory('Upload/Jay');
                    $userdata->save();
                    session()->forget('sendOTP');
                    return response()->json(['msg' => 'successful']);
                }

            } else {
                return response()->json(['msg' => 'Invalid OTP']);
            }
        } catch (Exception $e) {
            return response()->json(['msg' => 'Error '+$e]);
        }
    }

    public function sendMail(Request $request)
    {
        try {
            $emailChk = Person::get()->where('email', $request->email);
            if (count($emailChk) > 0) {
                return response()->json(['msg' => 'Email is already exist']);
            }
            $otp = mt_rand(100000, 999999);

            $email = $request->email;
            $name = $request->name;
            Mail::send(new otpMail($otp, $email, $name));
            session()->put('sendOTP', $otp);
            return response()->json(['msg' => 'successful']);
        } catch (Exception $e) {
            return response()->json(['msg' => 'Error '+$e]);
        }
    }

    //logout code here
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }


    //temporary function for get all data in json format
    public function getData()
    {
        $userData=DB::table('persons')->get();
        return response()->json(['msg'=>$userData]);
    }
}
