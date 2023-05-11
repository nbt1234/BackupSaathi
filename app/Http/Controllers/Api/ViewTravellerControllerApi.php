<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelModel;
use App\Models\UserModel;
use App\Models\ChatModel;
use App\Models\BlockModel;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\File;


class ViewTravellerControllerApi extends Controller
{
    //---------------------------------------view traveller-----------------------------//
    public function view_traveller(Request $req)
    {
        $post_id = $req->id;
        $user_id = $req->user_id;
        $traveller_detail = TravelModel::where('id',$req->id)->first();
        // $value = BlockModel::where('reciever_id', $user_id)->get()->first();
        // if ($value) {
        //     $traveller_detail['blocked_user_id'] = strval($value->sender_id);
        //     $traveller_detail['block_status'] = $value->block_status;
        // } else {
        //     $traveller_detail['blocked_user_id'] = "";
        //     $traveller_detail['block_status'] = 0;
        // }
        $value = BlockModel::where('block_user_id', $user_id)->get()->first();
                            if ($value) {
                                $traveller_detail['blocked_to'] = strval($value->block_to);
                                $data = BlockModel::where('block_to', $user_id)->get()->first();
                                if($data){
                                    $traveller_detail['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $traveller_detail['currentuser_block_by_status'] = 0;
                                }
                            } else {
                                $traveller_detail['blocked_to'] = "";
                                $data = BlockModel::where('block_to', $user_id)->get()->first();
                                if($data){
                                    $traveller_detail['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $traveller_detail['currentuser_block_by_status'] = 0;
                                }
                            }
        if($traveller_detail){

            return response()->json(['status' => 'success','traveller_detail'=>$traveller_detail]);
        }else{
            return response()->json(['status' => 'failed','No record found']);

        }
    }
    //---------------------------------------add more tvaveller-----------------------------//
     public function add_more_traveller(Request $request)
    {   
            $id = $request->id;
            $user_id = $request->user_id;
            $travel_data = TravelModel::where('id', $id)->where('user_id',$user_id)->first();
            $traveller_old_data = json_decode($travel_data->traveller, true);

            foreach ($traveller_old_data as $key => $old_data)
            $key = $key+1;
            if ($request['travellers'])
             {
                foreach ($request['travellers'] as $data) 
                    {
                            $first_name = $data['first_name'];
                            $last_name = $data['last_name'];
                            $age = $data['age'];
                            $gender = $data['gender'];
                            $language_spoken = $data['language_spoken'];
                            $special_needs = $data['special_needs'];
                            $relationship = $data['relationship'];
                            if($data['profile_image'])
                            {

                            $img = $data['profile_image'];
                            $path = public_path('admin-assets/img/profile_img/');
                            $img = str_replace('data:image/png;base64,', '', $img);
                            $img = str_replace(' ', '+', $img);
                            $data = base64_decode($img);
                            $files = uniqid() . '.png';
                            $file = $path.$files;
                            $success = file_put_contents($file, $data);
                            }else{
                            $files = '58BBE2.png';
                            }
                               
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

                    
                
                    
            }
                $traveller_new_data = array_merge($traveller_old_data,($traveller_detail));
                $travel_data->traveller =  json_encode($traveller_new_data,JSON_FORCE_OBJECT);
                // dd($travel_data->traveller);
                if($travel_data->save()){
                    return array('status' => 'success','message'=>'New Traveller successfully added.','user_id'=>$user_id,'id'=>$id);
                }else{
                    return array('status' => 'failed','message'=>'New Traveller Not added.');
                }
            
    }

    //---------------------------------------update  travel-----------------------------//
    public function update_traveller(Request $req)
    {
        
                 $travel_data = TravelModel::where('id',$req->id)->where('user_id',$req->user_id)->first();
                if($travel_data){
                        $travel_data->departure_city = $req['departure_city'];
                        $travel_data->layover_city = $req['layover_city'];
                        $travel_data->arrival_city = $req['arrival_city'];
                        $travel_data->airline_name = $req['airline_name'];
                        $travel_data->departure_date = $req['departure_date'];
                        $travel_data->departure_time = $req['departure_time'];
                        $travel_data->flexible_time = $req['flexible_time'];
                        $travel_data->departure_start_date = $req['departure_start_date'];
                        $travel_data->departure_end_date = $req['departure_end_date'];
                        $travel_data->save();

                    if($travel_data)
                    {
                        return array('status' => 'success', 'message' => 'Travel Detalis Update successfully.','user_id' => $req->user_id,'id' => $req->id);
                    } else {
                        return array('status' => 'failed', 'message' => 'Travel Detalis Not Update.');
                    }

                }else{
                    return array('status' => 'failed','message'=> 'Something wrong.');
                }
                
               
        

    }


    //---------------------------------------update  traveller-----------------------------//
    public function update_details_traveller(Request $req)
    {

       
            $user = $req->user_id;
            $id = $req->id;
            $travell_key = $req->traveller_key;
            // dd($travell_key);
            $traveller_details = TravelModel::where('id',$id)->where('user_id',$user)->first();
            $old_travelor_data = json_decode($traveller_details->traveller);
            $travellers_information = json_decode($traveller_details->traveller)->$travell_key;
            $old_travelor_data->$travell_key->first_name = $req->first_name;
            $old_travelor_data->$travell_key->last_name = $req->last_name;
            $old_travelor_data->$travell_key->age = $req->age;
            $old_travelor_data->$travell_key->language_spoken = $req->language_spoken;
            $old_travelor_data->$travell_key->special_needs = $req->special_needs;
            $old_travelor_data->$travell_key->relationship = $req->relationship;
            if ($req->hasFile('profile_image')) 
            { 
                $dest = 'admin-assets/img/profile_img/' . $old_travelor_data->$travell_key->profile_image;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('admin-assets/img/profile_img/'), $filename);
                $old_travelor_data->$travell_key->profile_image = $filename;
            }
            $old_travelor_data->$travell_key = $old_travelor_data->$travell_key;
            // dd($old_travelor_data);
            $traveller_details->traveller =  json_encode($old_travelor_data, JSON_FORCE_OBJECT);
            // dd($traveller_details);
            if ($traveller_details->save()) 
            {
                return array('status' => 'success', 'message' => 'Traveller Detalis Update successfully.','id' =>$id,'user_id' => $user,'traveller_key'=> $travell_key);
            } else {
                return array('status' => 'failed', 'message' => 'Traveller Detalis Not Update.');
            }
            
        }
    
}
