<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable =['state_name'];


    public function city()
    {
    	return $this->hasMany(City::class);
    }


    public function camp()
    {
        return $this->hasMany(Camp::class);
    }


    public static function arrayForSelect()
    {
    	$arr = [];

    	$sates  = State::all();

    	foreach($sates as $state){
    		$arr[$state->id] = $state->state_name ;
    	}
    	return $arr;
    }




}
