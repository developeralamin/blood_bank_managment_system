<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
	 protected $fillable =['camp_title','state_id','city_id','organized_by','details'];

    use HasFactory;


    public function state()
    {
    	return $this->belongsTo(State::class);
    }

   public function city()
    {
    	return $this->belongsTo(City::class);
    }
}
