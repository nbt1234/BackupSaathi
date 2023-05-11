<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelModel extends Model
{
    use HasFactory;
    protected $table = 'travel';

     protected $appends = ['travellers'];
     protected $hidden = ['traveller'];

     public function getTravellersAttribute()
     {
    
        foreach (json_decode($this->traveller, true) as $key => $imgData) {
            $travels['traveller_key']= $key;
            $img_path = asset('admin-assets/img/profile_img/');
            if($imgData['profile_image'] == null)
            {
             $travels['profile_image'] = asset('admin-assets/img/profile_img/58BBE2.png');   
            }else{

            $travels['profile_image'] = $img_path.'/'.$imgData['profile_image']; 
            }
            $travels['first_name'] = $imgData['first_name'];
            $travels['last_name'] = $imgData['last_name'];
            $travels['age'] = $imgData['age'];
            $travels['gender'] = $imgData['gender'];



            if($imgData['language_spoken'] == null)
            {
                    $travels['language_spoken'] = '';
            }else{
            $travels['language_spoken'] = $imgData['language_spoken'];

            }
            if($imgData['special_needs'] == null){
                    $travels['special_needs'] = '';
            }else{
            $travels['special_needs'] = $imgData['special_needs'];

            }
            if($imgData['relationship'] == null){
                $travels['relationship'] = '';
            }else{
            $travels['relationship'] = $imgData['relationship'];
            }
        $image[]=$travels;
        }
        return $image;
 
     }

      public function username()
    {
        return $this->hasOne(UserModel::class,'id','user_id');
    }



    }


