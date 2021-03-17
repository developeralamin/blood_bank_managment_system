<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	 protected $fillable =['city_name','pin_code','district','state_id'];
    use HasFactory;

public static function arrayForSelect()
    {
    	$arr = [];
    	$sates  = State::all();
    	foreach($sates as $state){
    		$arr[$state->id] = $state->state_name ;
    	}
    	return $arr;
    }

     public function state()
    {
    	return $this->belongsTo(State::class);
    }

  public function camp()
    {
        return $this->hasMany(Camp::class);
    }


 public static function arrayForSelectCity()
    {
        $arr = [];

        $cities  = City::all();

        foreach($cities as $city){
            $arr[$city->id] = $city->city_name ;
        }
        return $arr;
    }


}
