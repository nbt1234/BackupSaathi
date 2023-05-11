<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CityListModel;
use Illuminate\Support\Facades\File;



class CityListControllerApi extends Controller
{
    
public function all_cities(Request $req)
    {
        $cities = CityListModel::get();
        return array('status' => 'success' , 'Data' => $cities);
    }
}

