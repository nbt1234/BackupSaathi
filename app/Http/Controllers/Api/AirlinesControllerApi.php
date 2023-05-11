<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirLinesModel;
use Illuminate\Support\Facades\File;



class AirlinesControllerApi extends Controller
{
    public function show_airlines(Request $req)
    {
        $airlines = AirLinesModel::where('status',1)->get();
        return array('status' => 'success' , 'Data' => $airlines);
    }
}
