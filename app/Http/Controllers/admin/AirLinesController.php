<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirLinesModel;
use Illuminate\Support\Facades\File;




class AirLinesController extends Controller
{
    public function all_airlines()
    {
        $airlines = AirLinesModel::get()->sortDesc();
        return view('admin.airlines.airlineview',compact('airlines'));
    }
    public function add_airlines_view(Request $req)
    {
        return view('admin.airlines.airlines-add');
    }
    public function airlines_status(Request $request)
    {
        $status_id = '';
        if ($request->status == 1) {
            $status_id = 1;
        } elseif ($request->status == 0) {
            $status_id = 0;
        }
        // $update = DB::table('banners')->where('id',$request->id)->update(['status' => $status_id]);
        $update = AirLinesModel::where('id', $request->id)->first();
        $update->status = $status_id;
        if ($update->save()) {
            return array('status' => 'success', 'message' => "status updated successfully");
        } else {
            return array('status' => 'fail', 'message' => "status Not updated");
        }

    }
    public function add_airlines(Request $req)
    { 
        // dd($req->all());
        $req->validate([
            'airlines_name' => 'required',
            
    ]);
    $data = new AirLinesModel();

    if ($req->hasFile('airlines_image')) 
            {
                $dest = 'public/admin-assets/img/airline/' . $data->airlines_image;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('airlines_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('admin-assets/img/airline/'), $filename);
                $data->image = $filename;
            }else{
                $data->image = 'airplan.jpg';
            }
            $data->airlines_name = $req->airlines_name;
            $data->status = $req->airlines_status;
            $data->save();
            if($data){
                return redirect('admin/all-airlines')->with('flash-success', 'successfully Airline Add');
            } else {
                return back()->with('flash-error', 'Something error');
            }
        
    }
    public function airlines_destroy(Request $req){
        $data = AirLinesModel::where('id',$req->id)->delete();
        if($data){

            return array('status'=> 'success','message' => 'Record deleted successfully!');
        }else{
            return array('status'=> 'failed','message' => 'Record Not deleted!');
        }
    }
    public function edit_airlines($id)
    {
        $airlines_data = AirLinesModel::where('id',$id)->get();
        return view('admin.airlines.edit-airline',compact('airlines_data'));    
    }
    public function update_airlines(Request $req)
    {
        $data = AirLinesModel::where('id',$req->id)->first();
        if ($req->hasFile('airline_image')) 
            {
                $dest = 'public/admin-assets/img/airline/' . $data->image;
                if (File::exists($dest)) {
                    File::delete($dest);
                }
                $file = $req->file('airline_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('admin-assets/img/airline/'), $filename);
                $data->image = $filename;
            }
            $data->airlines_name = $req->airline_name;
            $data->status = $req->airline_status;
            $data->save();
            if($data){
                // $cities = AirLinesModel::get()->toArray();
                return redirect('admin/all-airlines')->with('flash-success', 'successfully AirLine Update');
            } else {
                return back()->with('flash-error', 'Something error');
            }
    }
}
