<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;use App\Models\TravelModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\File;
use DateTime;
use DB;

use Carbon\Carbon;

class SearchControllerApi extends Controller
{
    public function search_travel(Request $req)
    {
        $depa_city = $req->departure_city;
        $arri_city = $req->arrival_city; 
        $from_date = $req->form_departure; 
        $to_date = $req->to_departure; 
        $airline = $req->airline_name;
        $curent_userid = $req->user_id;
        $today_date = new DateTime('today');




        $date = today()->format('Y-m-d');
        
        ///Get india Current time///
        date_default_timezone_set('Asia/Kolkata');
        $t=time();
        $current_datetime = date("Y-m-d H:i",$t);

        //$datas = TravelModel::where('departure_date', '>=', $date)->orWhere('departure_start_date', '>=', $date)->get();
        //dd($datas);
        //dd($depa_city);       

     

        $get_query = TravelModel::latest();
       

        // dd($get_query);

        if($req->departure_city){               
            $get_query->where('departure_city','like','%'.$depa_city.'%');
        }
        if($req->arrival_city){ 
            $get_query->where('arrival_city','like','%'.$arri_city.'%');     
        }
        if($req->airline_name){ 
            $get_query->where('airline_name','like','%'. $airline.'%');     
        }
        //////////////////////////////////////////////////
        if($req->form_departure && $req->to_departure){ 
            $get_query->whereBetween('departure_date', [$from_date, $to_date]);
        }        
        /////////////////////////////////////////////////


        ////////Run Query with all above conditions//////////
        $Alldata = $get_query->get();
        
        if(sizeof($Alldata)){



        foreach ($Alldata as $key => $data)
        {
            $dep_datetime = $data['departure_date'].' '.$data['departure_time'];

           
            if($data['departure_date'] == null)
            { 
                       
                if(strtotime($data['departure_start_date']) >= strtotime($date) && $data['user_id'] != $curent_userid)
                {
                    $result[] = $data;
                }elseif(strtotime($data['departure_end_date'])>= strtotime($date) && $data['user_id'] != $curent_userid)
                {
                    $result[] = $data;
                }
                
            } else { 

                if(strtotime($dep_datetime) >= strtotime($current_datetime) && $data['user_id'] != $curent_userid)
                {
                // dd('all ok');
                    $result[] = $data;
                }
                
            }
            
               
               
        
        }
                return response()->json(['status' => 'success', 'message' => 'Travel Detalis Found.','travel_data' =>$result]);
          
        
         
                 
    }else{
                return response()->json(['status' => 'failed', 'message' => 'No Detalis Found.']);

            }
        
        
        
    }
}
