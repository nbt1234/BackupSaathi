<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CityListModel;
use Illuminate\Support\Facades\File;




class CityListController extends Controller
{
    public function all_city()
    {
        $cities = CityListModel::all()->sortDesc();
        return view('admin.citylist.cityview',compact('cities'));
    }
    public function city_status(Request $request)
    {
        // dd($request->status);
        $status_id = '';
        if ($request->status == 1) {
            $status_id = 1;
        } elseif ($request->status == 0) {
            $status_id = 0;
        }
        // $update = DB::table('banners')->where('id',$request->id)->update(['status' => $status_id]);
        $update = CityListModel::where('id', $request->id)->first();
        $update->status = $status_id;
        if ($update->save()) {
            return array('status' => 'success', 'message' => "status updated successfully");
        } else {
            return array('status' => 'fail', 'message' => "status Not updated");
        }
     

    }
//-----------------add city ------------------------//
    public function add_city(Request $req)
    { 
        $req->validate([
            // 'city_image' => 'required',
            'city_name' => 'required',
    ]);
    $data = new CityListModel();

    if ($req->hasFile('city_image')) 
            {
                $dest = 'public/admin-assets/img/city/' . $data->city_image;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('city_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('admin-assets/img/city/'), $filename);
                $data->image = $filename;
            }
            $data->city_name = $req->city_name;
            $data->status = $req->city_status;
            $data->save();
            if($data){
                return redirect('admin/all-city')->with('flash-success', 'successfully City Add');
            } else {
                return back()->with('flash-error', 'Something error');
            }
        
    }

// //-----------------add city ------------------------//
  public function add_city_view(Request $req)
    {
        return view('admin.citylist.city-add');
    }

//-----------------delete city ------------------------//

    // public function city_delete($id){
    //     CityListModel::where('id',$id)->delete();
    //     return back()->with('flash-success', 'City Data Delete.!!');
    // }
    public function destroy(Request $req)
    {
        $data = CityListModel::find($req->id)->delete();
        if($data){

            return array('status'=> 'success','message' => 'Record deleted successfully!');
        }else{
            return array('status'=> 'failed','message' => 'Record Not deleted!');
        }
    }

//-----------------edit view city------------------------//
    public function edit_city($id)
    {
        $city_data = CityListModel::where('id',$id)->get();
        return view('admin.citylist.edit-city',compact('city_data'));    
    }
//-----------------edit view city------------------------//
    public function update_city(Request $req)
    {
        $data = CityListModel::where('id',$req->id)->first();
        if ($req->hasFile('city_image')) 
            {
                $dest = 'public/admin-assets/img/city/' . $data->city_image;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('city_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('admin-assets/img/city/'), $filename);
                $data->image = $filename;
            }
            $data->city_name = $req->city_name;
            $data->status = $req->city_status;
            $data->save();
            if($data){
                return redirect('admin/all-city')->with('flash-success', 'successfully City Update');
            } else {
                return back()->with('flash-error', 'Something error');
            }
    }


}

