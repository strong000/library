<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
	protected $fillable = [
    	'movie_id',
    	'member_id',
    	'lending_date',
    	'expected_return_date',
    	'returned_date',
    	'lateness_charge'
    ];

    public function movie()
    {
    	return $this->belongsTo('App\Movie', 'movie_id');
    }

    public function member()
    {
    	return $this->belongsTo('App\Member', 'member_id');
    }
}	