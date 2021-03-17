<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{

	 protected $fillable =['blood_name','give_blood','receive_blood'];
    use HasFactory;
}
