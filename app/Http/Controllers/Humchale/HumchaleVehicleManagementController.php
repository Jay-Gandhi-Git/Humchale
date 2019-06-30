<?php

namespace App\Http\Controllers\Humchale;

use App\Person;
use App\vehicles;
use App\Vehicletypes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HumchaleVehicleManagementController extends Controller
{
    //
    public function addVehicleView(){

        $vehicleTypes = Vehicletypes::all();
        return view('ManageUser.addVehicle')->with("vehicleType",$vehicleTypes);
    }
    public function addVehicle(Request $request){
        $userId=session()->get('UserId');
        if($userId!=null) {

            if ($request->ajax()) {

                if ($request->hasFile('vehicle_photo')) {
//                    return response()->json(['msg'=>'We came on API']);
                    $file = $request->file('vehicle_photo');
                    if ($file) {

                        //Create the Email name folder in Uploaded folder(Email Folder will be unique)
                        $temp_Email = Person::where('person_id', $userId)->value('email');


                        $date = Carbon::now()->toDateString();
                        $new_name = $date . '_' . $request->vehicle_name . '_' . $file->getClientOriginalName();
                        $file->move('Uploaded/' . $temp_Email . '/VehicleImages', $new_name);
                        DB::table('vehicles')->insert([
                            'vehicletype_id' => $request->vehicle_Type,
                            'ownerId' => $userId,
                            'vehicle_name' => $request->vehicle_name,
                            'vehicle_company' => $request->vehicle_company,
                            'vehicle_model_date' => $request->vehicle_model_date,
                            'vehicle_number' => $request->vehicle_number,
                            'no_of_seats' => $request->no_of_seats,
                            'aircondition_status' => $request->aircondition_status,
                            'type_of_seats' => $request->type_of_seat,
                            'rc_book_number' => $request->rc_book_number,
                            'vehicle_photo' => $new_name
                        ]);

                        return response()->json(['msg' => 'successful']);

                    }

                }
            } else {
                return response()->json(['msg' => 'error']);
            }

        }
    }

    public function viewVehicleList(Request $request){
        $userId=session()->get('UserId');
        if($userId!=null) {
            $vehicleData= vehicles::where('ownerId',$userId)->get();
            return response()->json(['msg'=>$vehicleData]);
        }
        else{
            
            return response()->json(['msg'=>'Session Expired']);
        }
    }
    public function viewVehicleDetails(Request $request)
    {
        $userId=session()->get('UserId');
        if($userId!=null) {
            $vehicleDetails= vehicles::where('vehicle_id',$request->get('id'))->get();
            $userEmail = Person::where('person_id',$userId)->value("email");
            return response()->json(['msg'=>$vehicleDetails,'email'=>$userEmail]);
        }
        else{

            return response()->json(['msg'=>'Session Expired']);
        }
    }
}
