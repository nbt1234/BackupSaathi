<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CityListModel;
use App\Models\TravelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\File;
use DB;

class HomeControllerApi extends Controller
{
    
    public function user_home_page(Request $req)
    {
        $curent_userid = $req->user_id;
        $city_all =  CityListModel::where('status',1)->select('id','image','city_name')->get()->toArray();
        $total_num = array();
        foreach($city_all as $key => $allcity)
        {
                
                $cityname = $allcity['city_name'];
                $city_count = DB::table('travel')->where('departure_city','LIKE', '%'.$cityname.'%')->count();

                $total_num[$key]['city_id'] = $allcity['id'];
                $total_num[$key]['cityname'] = $cityname;
                $total_num[$key]['count'] = $city_count;
                $total_num[$key]['city_image'] = asset('admin-assets/img/city/'.$allcity['image']);


                
        }
        $keys = array_column($total_num, 'count');
        array_multisort($keys, SORT_DESC, $total_num);       
        //return response()->json(['status' => 'success', 'data' => $total_num]);

        
        
        $travel_details = TravelModel::get();
        foreach($travel_details as $key => $travel_detail)
        {
            if($travel_detail->user_id != $curent_userid)
            {
                $all_travel[] = $travel_detail;
            }
            
        }
        // dd($all_travel);
        return response()->json(['status' => 'success','city_details'=>$total_num,'travel_data'=>$all_travel]);
    }



    
    //--------------traveller add-------------------------------------------------------//
    
    public function traveller_add_page(Request $request)
    {

        //$user_datils = UserModel::where('phone', $req->phone)->first();
        $user_id = $request->user_id;
        $user = new TravelModel();
        $user->user_id = $user_id;
        if ($request['travellers'][0]['profile_image'])
         {
              foreach ($request['travellers'] as $key => $data) {
                            $first_name = $data['first_name'];
                            $last_name = $data['last_name'];
                            $age = $data['age'];
                            $gender = $data['gender'];
                            $language_spoken = $data['language_spoken'];
                            $special_needs = $data['special_needs'];
                            $relationship = $data['relationship'];
                        
                            $img = $data['profile_image'];
                            
                            $path = public_path('admin-assets/img/profile_img/');
                            $img = str_replace('data:image/png;base64,', '', $img);
                            $img = str_replace(' ', '+', $img);
                            $data = base64_decode($img);
                            $files = uniqid() . '.png';
                            $file = $path.$files;
                            $success = file_put_contents($file, $data);
                               
                            $traveller_detail[] = array(
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'age' => $age,
                            'gender' =>$gender,
                            'language_spoken'=> $language_spoken,
                            'special_needs' => $special_needs,
                            'relationship'=> $relationship,
                            'profile_image' => $files,
                        );
                        
                    }

                }else{
                    foreach ($request['travellers'] as $key => $data) {
                            $first_name = $data['first_name'];
                            $last_name = $data['last_name'];
                            $age = $data['age'];
                            $gender = $data['gender'];
                            $language_spoken = $data['language_spoken'];
                            $special_needs = $data['special_needs'];
                            $relationship = $data['relationship'];

                            $traveller_detail[] = array(
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'age' => $age,
                            'gender' =>$gender,
                            'language_spoken'=> $language_spoken,
                            'special_needs' => $special_needs,
                            'relationship'=> $relationship,
                            'profile_image' => '58BBE2.png',
                        );
                    }
                }
                $user->traveller =  json_encode($traveller_detail,JSON_FORCE_OBJECT);
                $user->departure_city = $request['departure_city'];
                $user->layover_city = $request['layover_city'];
                $user->arrival_city = $request['arrival_city'];
                $user->airline_name = $request['airline_name'];
                $user->departure_date = $request['departure_date'];
                $user->departure_time = $request['departure_time'];
                $user->flexible_time = $request['flexible_time'];

                $user->departure_start_date = $request['departure_start_date'];
                $user->departure_end_date = $request['departure_end_date'];
                if($user->save()){
                    return array('status' => 'success','message'=>'Traveller successfully added.','user_id'=>$user_id,'id'=>$user['id']);
                }else{
                    return array('status' => 'failed','message'=>'Traveller Not added.');
                }
        
    }

   
}    

