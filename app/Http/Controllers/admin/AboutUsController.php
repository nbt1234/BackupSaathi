<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TextEditor;
use App\Models\policy;




class AboutUsController extends Controller
{
    //-----------------about us-show-data--------------------------//
    public function all_about_us(Request $req)
    {
        $data = TextEditor::all();
        return view('admin.about_us.index', compact('data'));
    }

    //------------------------- about us----------------------------//
    public function edit_about_us($id)
    {
        $data = TextEditor::where('id', $id)->first();
        return view('admin.about_us.edit-about-us',compact('data'));
    }

    public function update_about_us(Request $request)
    {
    
        $data = TextEditor::where('id', $request->about_us_id)->first();
        $data->message = $request->description;
        if($data->save()){
            return redirect('admin/show-about-us')->with('flash-success', 'Successfully Update About Us Content.');
        } else {
            return back()->with('flash-error', 'something went wrong.');
        }   
        // return view('admin.about_us.edit-about-us',compact('data'));
    }

    //-------------------------saathi privacy policy show data----------------------//
    public function saathi_privacy_policy()
    {
        $data = policy::all();
        return view('admin.saathi-privacy-policy.saathi-privacy-policy',compact('data'));
    }
    public function policy_index()
    {
        $data = policy::all();
        return view('admin.saathi-privacy-policy.policy-index', compact('data'));
    }
    public function saathi_privacy_policy_edit($id)
    {
        $data = policy::where('id', $id)->first();
        return view('admin.saathi-privacy-policy.saathi-privacy-policy-edit', compact('data'));
    }
    public function saathi_privacy_policy_update(Request $req)
    {
        
        $data = policy::where('id', $req->policy_id)->first();
        $data->policy = $req->policy;
        if($data->save()){
            return redirect('admin/policy-index')->with('flash-success', 'Successfully Update About Us Content.');
        } else {
            return back()->with('flash-error', 'something went wrong.');
        }  
    }
}