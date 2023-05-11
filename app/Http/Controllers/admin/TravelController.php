<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelModel;
use App\Models\UserModel;
use App\Models\AirLinesModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DB;




class TravelController extends Controller
{
    public function all_travel()
    {
        // $data = TravelModel::with('username')->where('user_id',$id)->get()->sortDesc();
        $data = TravelModel::with('username')->get()->sortDesc();
        $travel_data  = json_decode($data, true);
        return view('admin.travel-companion.all-travel-comp', compact('travel_data'));
    }


    public function add_travel_view($id)
    {
        $users = $id;
        $airlines = AirLinesModel::where('status',1)->select('airlines_name')->get();
        return view('admin.travel-companion.add-travel', compact('users','airlines'));
    }


    public function add_travel(Request $req)
    {
        $user_id = $req->user_id;
        $user = new TravelModel();

        $user->user_id = $user_id;
        foreach ($req->traveller as $key => $data) 
        {
                $first_name = $data['first_name'];
                $last_name = $data['last_name'];
                $age = $data['age'];
                $gender = $data['gender'];
                $language_spoken = $data['language_spoken'];
                $special_needs = $data['special_needs'];
                $relationship = $data['relationship'];
                if(isset($data['profile_img'])){
                    $file = $data['profile_img'];
                    $tempName = rand(0, 9999);
                    $filenames = $tempName . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('admin-assets/img/profile_img'), $filenames);
                }else{
                    $filenames = '58BBE2.png';
                }    
                $traveller_detail[] = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'age' => $age,
                    'gender' => $gender,
                    'language_spoken' => $language_spoken,
                    'special_needs' => $special_needs,
                    'relationship' => $relationship,
                    'profile_image' => $filenames,
                );
                $file = $filenames;
        }
        $user->traveller =  json_encode($traveller_detail, JSON_FORCE_OBJECT);
        $user->departure_city = $req['departure_city'];
        $user->layover_city = $req['layover_city'];
        $user->arrival_city = $req['arrival_city'];
        $user->airline_name = $req['airline_name'];
        $user->departure_date = $req['departure_date'];
        $user->departure_time = $req['departure_time'];
        $user->flexible_time = $req['flexible_time'];
        $user->departure_start_date = $req['departure_start_date'];
        $user->departure_end_date = $req['departure_end_date'];
        if ($user->save()) {
            return redirect('admin/view-travel-list-byuser/'.$user_id)->with('flash-success', 'Successfully Added A Travel.');
        } else {
            return back()->with('flash-error', 'something went wrong.');
        }   
    }

    public function show_travellor(Request $request)
    {
        $showTravellorData = TravelModel::where('id', $request->id)->get();
        if($showTravellorData){
            foreach (json_decode($showTravellorData[0]['traveller'], true) as $key => $value) {
                $Data[] = $value;
            }
            return response(['status' => 'success', 'data' => $Data]);
        }else{
            return response(['status' => 'failed', 'message' => 'something went wrong']);
        }


    } 


    public function trevel_destroy(Request $req)
    {
        // dd($req->id);
        $data = TravelModel::where('id', $req->id)->delete();
        if($data){

            return array('status'=> 'success','message' => 'Record deleted successfully!');
        }else{
            return array('status'=> 'failed','message' => 'Record Not deleted!');
        }
    }
}
