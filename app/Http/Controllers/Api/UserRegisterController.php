<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\UserRegisterModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;
use App\Models\TravelModel;
use App\Models\UserModel;
use App\Mail\SaathiNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use DB;

class UserRegisterController extends Controller
{
    //----------------------------user register--------------------------------------//
    public function user_register(Request $req)
    {
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:user_models,email',
            'phone' => 'required|min:10|max:10|unique:user_models,phone',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password' 
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => $validator->errors()->first()]);
        } else {

            $users = new UserRegisterModel();
            $users->first_name = $req->first_name;
            $users->last_name = $req->last_name;
            $users->email = $req->email;
            $users->phone = $req->phone;
            $users->password = Hash::make($req->password);
            $users->plain_password = $req->password;
            $users->user_avatar = '58BBE2.png';
            $users->status = 1;
            $details = $users;
            Mail::to($req->email)->send(new SaathiNotification($details));
            $users->device_token = $req->token;
            $users->save();

            if ($users->id > 0){
                
                $user =UserRegisterModel::where('id',$users->id)->first();
                $user['user_avatar'] = asset('admin-assets/img/profile_img/58BBE2.png');
                return array('status' => 'success','message' => 'user added successfully.', 'user_data' => $user);
            } else {
                return array('status' => 'failed','message'=> 'Error.');
            }

        }
    }
    //----------------------------user signin--------------------------------------//

    public function user_signin(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|min:5',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => $validator->errors()->first()]);
        }else{
            $data = UserRegisterModel::where('phone', $req->phone)->first();
            if($data)
                {
                    $pwd = $req->password;
                    if(hash::check($pwd, $data->password))
                    {

                        $data->device_token = $req->token;
                        $data->save();
                        $user_data = json_decode($data, true);
                        if($user_data['user_avatar'] == null)
                        {
                         $user_data['user_avatar'] = asset('admin-assets/img/profile_img/58BBE2.png');   
                        return array('status' =>'success', 'message' => 'successfully user Signin.','user_data' => $user_data);
                        }
                        $user_data['user_avatar'] = asset('admin-assets/img/profile_img/'.$user_data['user_avatar']);
                        return array('status' =>'success', 'message' => 'successfully user Signin.','user_data' => $user_data);
                            
                        
                    }else{
                    return array('status' =>'failed', 'message' => 'invalid password.');
                    }
            }
            else{
                return array('status' => 'failed' ,'message' => 'invalid Phone number.');
            }
        }
            
    }
    //----------------------------password change--------------------------------------//

    public function password_change(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'phone' => 'required|min:10|max:10',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => $validator->errors()->first()]);
        } else {
                $phone =$req->phone;
                $users = UserRegisterModel::where('phone',$phone)->first();
                if($users)
                {
                    $old_pwd = $users->plain_password;
                    if($old_pwd == $req->password){
                            return array('status' => 'failed','message'=> 'New password is same as old password please try a new password!!.');
                    }else{

                        $users->password = Hash::make($req->password);
                         $users->plain_password = $req->password;
                         $users->save();
                         if ($users->phone > 0)
                            {
                                $users['user_avatar'] = asset('admin-assets/img/profile_img/'.'/'.$users['user_avatar']);
                                return array('status' => 'success','message'=> 'Password successfully Update.','user_data'=>$users);
                            }else{return array('status' => 'failed','message'=> 'Password Not Update.');}
                    }
                             
                }
                else
                {
                    return array('status' => 'failed','message'=> 'Invalid Phone number.');
                }
                
            }   
        
        }
    //----------------------------user profile update--------------------------------------//

    public function user_profile_update(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|min:10|max:10',
            'email' => 'required|email',
            // 'user_avatar' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => $validator->errors()->first()]);
        }else{
            $user_id = $req->id;
            $users = UserRegisterModel::find($user_id);
            $users->first_name = $req->first_name;
            $users->last_name = $req->last_name;
            if ($req->hasFile('user_avatar')) 
            {
                $dest = 'admin-assets/img/profile_img/' . $users->user_avatar;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('user_avatar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('/admin-assets/img/profile_img/'), $filename);
                $users->user_avatar = $filename;

            }
            $users->phone = $req->phone;
            $users->email = $req->email;
            $users->save();
            
            if ($users->id > 0){
                return array('status' => 'success' , 'message'=>'Profile update successfully.', 'user_id'=>$user_id);
            } else {
                return array('status' => 'failed','message'=>'Profile update Not successfully.');
            }
        }
        
    }
    //----------------------------profile detalis--------------------------------------//

    public function profile_detalis(Request $req)
    {
        $user_id = $req->id;
        $users =  UserRegisterModel::where('id',$user_id)->select('id','user_avatar','first_name','last_name','phone','email')->get();
        $user_post = TravelModel::where('user_id',$user_id)->get()->toArray();

        if ($users){
            
                    if($users[0]['user_avatar'] == null)
                        {
                         $users[0]['user_avatar'] = asset('admin-assets/img/profile_img/58BBE2.png');   
                        return array('status' => 'success' , 'user_details'=>$users,'user_post'=>$user_post);
                        }
                        $users[0]['user_avatar'] = asset('admin-assets/img/profile_img/'.$users[0]['user_avatar']);
                        return array('status' => 'success' , 'user_details'=>$users,'user_post'=>$user_post);
        } else {
            return array('status' => 'failed','message'=>'Profile update Not successfully.');
        }
        
    }
    public function logout(Request $req) 
    {
        // $token = $request->user()->token();
        $user_id = $req->id;
        $data = UserRegisterModel::where('id',$user_id)->first();
        $data->device_token = null;
        $data->save();
        return array('status' => 'success','message'=>'User Successfully Logout.');
    }
    
    //----------------------------user delete------------------------------//
    public function user_delete(Request $req){
        $user_id = $req->user_id;
        DB::table('user_models')->where('id', $user_id)->delete();
        DB::table('travel')->where('user_id', $user_id)->delete();
        return array('status' => 'success','message'=>'User Detalis Successfully Delete.');
    }
}
