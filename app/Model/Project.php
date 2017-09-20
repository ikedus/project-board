<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Project extends Model
{	
	protected $fillable = [
        'name',
        'description'
    ];

    public function customer()
    {
    	return $this->belongsToMany('App\Model\Name')->wherePivot('people_type','customer');
    }

    public function teacher()
    {
    	return $this->belongsToMany('App\Model\Name')->wherePivot('people_type','customer');;
    }

    public function student()
    {
    	return $this->belongsToMany('App\Model\Name')->wherePivot('people_type','customer');
    }
}
