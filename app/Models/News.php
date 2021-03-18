<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model

{

	protected $fillable = ['news_title','details'];
    use HasFactory;
}
