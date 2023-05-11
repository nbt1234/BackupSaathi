<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChatModel;
use App\Models\Api\UserRegisterModel;
use DB;
use App\Models\UserModel;
use App\Models\Report;
use App\Models\TravelModel;
use App\Models\BlockModel;
use App\Mail\Chat_Notification;
use App\Mail\ReportNotification;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use DateTime;

class ChatControllerApi extends Controller
{
    //-------------------------user chat post------------------------------//

    public function user_chat(Request $req)
    {
        $data = new ChatModel();
        $data->tour_id = $req->tour_id;
        $data->sender_id = $req->sender_id;
        $data->receiver_id = $req->receiver_id;
        $data->grp_id = $req->grp_id;
        $value = ChatModel::where('grp_id', $req->grp_id)->first();
        if ($value == null) {
            $userdata = new UserModel();
            $reciver_data = $userdata->where('id', $req->sender_id)->select('first_name', 'last_name')->get();
            $email = $userdata->where('id', $req->receiver_id)->select('email')->get();
            Mail::to($email)->send(new Chat_Notification($reciver_data));
        }
        $data->message = $req->message;
        $data->save();


        $chatnotification = DB::table('messages')
            ->join('user_models', 'user_models.id', '=', 'messages.sender_id')
            ->where('sender_id', $req->sender_id)
            ->where('tour_id', $req->tour_id)
            ->select('messages.tour_id', 'messages.sender_id', 'user_models.first_name', 'user_models.last_name', 'user_models.user_avatar', 'messages.message')
            ->orderBy('messages.id', 'desc')
            ->get()
            ->unique('grp_id');


        $title = $chatnotification[0]->first_name . ' ' . $chatnotification[0]->last_name;

        $dataa = $chatnotification[0]->message;


        $SERVER_API_KEY = env('FCM_SERVER_KEY');
        $firebaseToken = [];
        $firebaseToken = DB::table('user_models')->where('id', $req->receiver_id)->get()->first()->device_token;
        $value = [
            "to" => $firebaseToken,
            "notification" => [
                "title" => $title,
                "body" => $dataa,
            ]
        ];

        $dataString = json_encode($value);
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        // $response = curl_exec($ch);
        $rest = curl_exec($ch);
        if ($rest === false) {
            return curl_error($ch);
        }
        curl_close($ch);
        //  $SERVER_API_KEY = env('FCM_SERVER_KEY');
        // $header = array();
        // $header[] = 'Content-type: application/json';
        // $header[] = 'Authorization: key='. $SERVER_API_KEY;
        // $firebaseToken = DB::table('user_models')->where('id',$req->receiver_id)->select('device_token')->get();
        // $payload = [
        //   'to' => $firebaseToken,
        //   'notification' => [
        //     'title' => "Portugal VS Germany",
        //     'body' => "1 to 2"
        //   ]
        // ];

        // $crl = curl_init();
        // curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
        // curl_setopt($crl, CURLOPT_POST,true);
        // curl_setopt($crl, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        // curl_setopt($crl, CURLOPT_POSTFIELDS, json_encode( $payload ) );

        // curl_setopt($crl, CURLOPT_RETURNTRANSFER, true );

        // $rest = curl_exec($crl);

        // dd($rest);

        $dataString = json_encode($data);


        if ($data->id > 0) {
            return array('status' => 'success', 'message' => 'blue tick', 'data' => $data);
        } else {
            return array('status' => 'failed', 'message' => 'red tick.');
        }

    }

    //-------------------------user chat list------------------------------//
    public function user_list(Request $req)
    {
        $user_id = $req->user_id;


        $data = ChatModel::where('receiver_id', $user_id)
            ->orWhere('sender_id', $user_id)
            ->orderBy('id', 'desc')
            ->get()->unique('grp_id');

        $final_data = [];
        if (count($data)) {
            foreach ($data as $key => $value) {
                $sender = $value->sender_id;
                $receiver = $value->receiver_id;
                $tour = $value->tour_id;
                $status = $value->status;
                $tour_id = $value->grp_id;
                if ($sender == $user_id) {
                    $userdata = UserModel::where('id', $receiver)->select('first_name', 'last_name')->get();
                    if (count($userdata) == 1) {

                        $travel_data = TravelModel::where('id', $tour)->select('traveller')->get();
                        $travel = json_decode($travel_data, true);

                        foreach ($travel as $keys => $values) {
                            $final_data[$key] = $value;
                            $final_data[$key]['user_id'] = $receiver;
                            $final_data[$key]['traveller_first_name'] = $values['travellers'][0]['first_name'];
                            $final_data[$key]['user_name'] = $userdata[0]['first_name'] . ' ' . $userdata[0]['last_name'];
                            $final_data[$key]['user_img'] = $values['travellers'][0]['profile_image'];
                            $value = BlockModel::where('block_user_id', $user_id)->where('tour_id',$tour_id)->get()->first();
                            if ($value) {
                                $final_data[$key]['blocked_to'] = strval($value->block_to);
                                $data = BlockModel::where('block_to', $user_id)->where('tour_id',$tour_id)->get()->first();
                                if($data){
                                    $final_data[$key]['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $final_data[$key]['currentuser_block_by_status'] = 0;
                                }
                            } else {
                                $final_data[$key]['blocked_to'] = "";
                                $data = BlockModel::where('block_to', $user_id)->where('tour_id',$tour_id)->get()->first();
                                if($data){
                                    $final_data[$key]['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $final_data[$key]['currentuser_block_by_status'] = 0;
                                }
                            }

                        }
                    }

                } else {

                    $userdata = UserModel::where('id', $sender)->select('first_name', 'last_name')->get();
                    if (count($userdata) == 1) {

                        $travel_data = TravelModel::where('id', $tour)->select('traveller')->get();
                        $travel = json_decode($travel_data, true);

                        foreach ($travel as $keys => $values) {
                            $final_data[$key] = $value;
                            $final_data[$key]['user_id'] = $sender;
                            $final_data[$key]['traveller_first_name'] = $values['travellers'][0]['first_name'];
                            $final_data[$key]['user_name'] = $userdata[0]['first_name'] . ' ' . $userdata[0]['last_name'];

                            $final_data[$key]['user_img'] = $values['travellers'][0]['profile_image'];
                            $value = BlockModel::where('block_user_id', $user_id)->where('tour_id',$tour_id)->get()->first();
                            if ($value) {
                                $final_data[$key]['blocked_to'] = strval($value->block_to);
                                $data = BlockModel::where('block_to', $user_id)->where('tour_id',$tour_id)->get()->first();
                                if($data){
                                    $final_data[$key]['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $final_data[$key]['currentuser_block_by_status'] = 0;
                                }
                            } else {
                                $final_data[$key]['blocked_to'] = "";
                                $data = BlockModel::where('block_to', $user_id)->where('tour_id',$tour_id)->get()->first();
                                if($data){
                                    $final_data[$key]['currentuser_block_by_status'] = $data->block_status;
                                }else{

                                    $final_data[$key]['currentuser_block_by_status'] = 0;
                                }
                            }
                        }
                    }
                }

            }
            $array = array_values($final_data);
            return array('status' => 'success', 'users' => $array);

        } else {

            return array('status' => 'failed', 'message' => 'No Record Found.!');

        }
    }


    //-------------------------one to one chat------------------------------//


    public function one_one_chat(Request $req)
    {

        $tourid = $req->tour_id;
        $current_user_id = $req->user_id;
        $receiver_id = $req->receiver_id;
        $sender_id = $req->sender_id;
        $grp_id = $req->grp_id;

        if ($receiver_id == $current_user_id) {
            //echo 'same';
            ChatModel::where('grp_id', $grp_id)->orderBy('id', 'DESC')->limit(1)->update(array('seen' => 1));
        }



        $messages = ChatModel::where('grp_id', $grp_id)->select('id', 'tour_id', 'receiver_id as user_id', 'message', 'seen', 'created_at', 'updated_at')->orderBy('id', 'desc')->get();

        if (!empty($messages)) {
            return array('status' => 'success', 'tour_id' => $tourid, 'tour_chat' => $messages);
        } else {
            return array('status' => 'failed', 'message' => 'No Record Found.!');
        }
    }
    public function user_report(Request $req)
    {
        $data = new Report;
        $msg = $req->report_msg;

        $data->current_user_id = $req->user_id;
        $data->grp_id = $req->grp_id;
        $data->sender_id = $req->sender_id;
        $data->receiver_id = $req->reciever_id;
        $data->report_msg = $msg;
        $data->save();
        if ($data->id > 0) {
            $userdata = UserModel::where('id', $req->user_id)->select('first_name', 'last_name')->get();
            $senderdata = UserModel::where('id', $req->sender_id)->select('first_name', 'last_name')->get();

            $body = [
                'from_report' => $userdata[0]['first_name'] . ' ' . $userdata[0]['last_name'],
                'to_report' => $senderdata[0]['first_name'] . ' ' . $userdata[0]['last_name'],
                'report_msg' => $msg,
            ];
            Mail::to('travelsathi2023@gmail.com')->send(new ReportNotification($body));
            return array('status' => 'success', 'message' => "Report successfully sent to admin.");
        } else {
            return array('status' => 'failed', 'message' => "Report not successfully sent to admin.");
        }


    }
    public function user_block(Request $req)
    {
        $data = new BlockModel;
        $data->block_user_id = $req->block_user_id;
        $data->block_to = $req->block_to;
        $data->block_status = $req->block_status;
        $data->tour_id = $req->tour_id;
        $data->save();
        if ($data->id > 0) {
            return array('status' => 'success', 'message' => "user block successfully.",'data'=>$data);
        } else {
            return array('status' => 'failed', 'message' => "user block not successfully.");
        }


    }


    public function user_unblock(Request $req)
    {
        $value = BlockModel::where('block_user_id', $req->block_user_id)->where('tour_id',$req->tour_id)->get()->first();
        if ($value) {
             BlockModel::where('block_user_id', $req->block_user_id)->where('tour_id',$req->tour_id)->delete();
                return array('status' => 'success', 'message' => "Now user unblocked.");
        } else {
            return array('status' => 'failed', 'message' => "User are not blocked.");
        }
    }

    public function message_delete()
    {

        $travel_data = TravelModel::select('id', 'user_id', 'departure_date', 'departure_end_date')->get();
        foreach ($travel_data as $key => $value) {
            $now_date = today()->format('Y-m-d');
            if ($value['departure_date'] == null) {
                $dep_date[$value['id']] = date('Y-m-d', strtotime($value['departure_end_date'] . ' + 7 days'));
            } elseif ($value['departure_end_date'] == null) {
                $dep_date[$value['id']] = date('Y-m-d', strtotime($value['departure_date'] . ' + 7 days'));
            }
        }
        foreach($dep_date as $kiy => $value2){
            if ($now_date > $value2) {
                $abc =  ChatModel::where('tour_id', $kiy)->delete();
            }
         }
        if($abc){ 
            return array('status' => 'success', 'message' => "User oldest chat record delete successfully.");
        }else{
            return array('status' => 'failed', 'message' => "User oldest chat record not found.");
        }      
    }
}