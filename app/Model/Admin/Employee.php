<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     public function projects()
    {
    	return $this->belongsToMany('App\Model\Admin\Project','project_clients')->withTimestamps();
    }
}
