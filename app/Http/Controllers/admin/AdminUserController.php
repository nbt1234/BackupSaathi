<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use App\Models\TravelModel;
use App\Mail\SaathiNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistration;


class AdminUserController extends Controller
{
    //--------------------------------------------user list--------------------------------//
    public function get_users_list(){
  
        $users_list = UserModel::all()->sortDesc();
        //dd($users_list);
        return view('admin/users/index', compact('users_list'));

    }

    public function view_travel_list_byuser($id)
    {
        $user_id = $id;
        $data = TravelModel::with('username')->where('user_id',$user_id)->get()->sortDesc();
        $travel_data  = json_decode($data, true);
        return view('admin.travel-companion.travel-by-user', compact('travel_data','user_id'));
    }
 //--------------------------------------------delete user--------------------------------//
    public function user_destroy(Request $req)
    {
        $user =  UserModel::where('id', $req->id)->delete();
        if($user)
        {
            TravelModel::where('user_id',$req->id)->delete();
        return array('status'=> 'success','message' => 'User deleted successfully!');
       }else{
        return array('status'=> 'success','message' => 'something went wrong!');
         }

    }
    
     //--------------------------------------------add user--------------------------------//

     public function user_add(){
        return view('admin/users/user-add');
     }

    public function insert_users(Request $request)
    {   
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email:rfc,dns|unique:user_models',
            'phone' => 'required|digits:10|unique:user_models',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new UserModel;
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->plain_password = $request->password;
        $user->phone = $request->phone;
        $user->terms = "on";
        $details = $user;
        Mail::to($request->email)->send(new SaathiNotification($details));
        if($request->file('user_avatar'))
                {
                    $file = $request->user_avatar;
                    $tempName = rand(0, 9999);
                    $filename = $tempName.time(). '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/admin-assets/img/profile_img'),$filename);
                }else{

                    $filename= '58BBE2.png';
                }
        $user->user_avatar = $filename;
        $user->status = $request->user_status;
        $user->save();
        
        if($user->id > 0){
            return redirect('admin/all-user')->with('flash-success', 'You Have Successfully Added A User.');
        } else{
            return back()->with('flash-error', 'something went wrong.');
        }

    }
    
     //--------------------------------------------edit user--------------------------------//

    public function view_user($id){
        $user_data = UserModel::where('id',$id)->first();
        
        return view('admin/users/user-edit', compact('user_data'));
    }

    public function update_user(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            
        ]);
        $formdata = $request->all();
        
        $user_id = $formdata['id']; 
        $edit_user = UserModel::find($user_id);
        
        $edit_user->first_name = $formdata['firstname'];
        $edit_user->last_name = $formdata['lastname'];

        if($formdata['password']){
            if($formdata['password'] == $formdata['con_password'])
            {
                $edit_user->password = Hash::make($formdata['password']);
                $edit_user->plain_password = $formdata['password'];
                $edit_user->save();
                return redirect('admin/all-user')->with('flash-success', 'User Password has been updated.');
            }else{
             return back()->with('flash-error', 'The password and confirmation password do not match.');

            }


        }
                    
             $edit_user->save();
             return redirect('admin/all-user')->with('flash-success', 'User Details has been updated.');

        }
    
     //--------------------------------------------user email check--------------------------------//

    public function check_email_existance(Request $request){


        $formdata = $request->all();
        //dd($formdata['useremail']);
        if ($request['existance_type'] == 'uemail'){ 
            // echo $request['useremail'];
            $checkuser = UserModel::where('email', '=', $request['useremail'])->count(); 
            //dd($checkuser); 
            if($checkuser == 0){
                echo 'true';    //Good To Register
            } else {
                echo 'false';    //Already Register
            }
        }

    }
}