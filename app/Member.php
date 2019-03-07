<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

     protected $fillable = [
    	'name',
    	'age',
    	'address',
    	'telephone',
    	'ic_number',
    	'date_of_joined',
    	'is_active'
    ];
}