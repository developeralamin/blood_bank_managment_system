<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable =['name','gender','age','phone','email','blood_group_id'];


    use HasFactory;

  // public static function arrayForSelect()
  //   {
  //   	$arr = [];

  //   	$bloods  = BloodGroup::all();

  //   	foreach($bloods as $blood){
  //   		$arr[$blood->id] = $blood->blood_name ;
  //   	}
  //   	return $arr;
  //   }


 public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class);
    }

}
