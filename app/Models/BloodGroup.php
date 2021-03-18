<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{

	 protected $fillable =['blood_name','give_blood','receive_blood'];
    use HasFactory;


  public static function arrayForSelectBlood()
    {
    	$arr = [];

    	$blood  = BloodGroup::all();

    	foreach($blood as $blood){
    		$arr[$blood->id] = $blood->blood_name ;
    	}
    	return $arr;
    }

   public function donor()
    {
    	return $this->hasMany(Donor::class);
    }


}
