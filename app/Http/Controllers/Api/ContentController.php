<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TextEditor;
use App\Models\policy;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;




class ContentController extends Controller
{
    //------------------------- about us----------------------------//
    public function about_us(Request $req)
    {
        $id = $req->id;
        $data = TextEditor::where('id',$req->id)->first();
        $data->message = $req->content;
        if($data->save())
        {
             return array('status' => 'success','message'=>'Content Update successfully.');
        }else{
            return array('status' => 'failed','message'=>'Content Not Update.');
        }
    
    
    }
    public function get_about_us(Request $req)
    {
        $data = TextEditor::all();
        if($data)
        {
             return array('status' => 'success','Editor'=> $data);
        }else{
            return array('status' => 'failed','message'=>'No Data Found.');
        }
    
    
    }
    public function get_privacy_policy()
    {
        $data = policy::all();
        return view('admin.saathi-privacy-policy.saathi-privacy-policy',compact('data'));
    }
}
