<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityListModel extends Model
{
    use HasFactory;
    protected $table = 'city_list_models';

    protected $appends = ['image_path'];
    
    public function getImagePathAttribute(){
        $img_path = asset('admin-assets/img/city/');
        $hotel_image_data = $img_path.'/'.$this->image; 
        return $hotel_image_data;
    }

    
}
