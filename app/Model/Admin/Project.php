<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function clients()
    {
    	return $this->belongsToMany('App\Model\Admin\Client','project_clients')->withTimestamps();
    }

   public function employees()
    {
    	return $this->belongsToMany('App\Model\Admin\Employee','project_employees')->withTimestamps();
    }

    public function services()
    {
    	return $this->belongsToMany('App\Model\Admin\Service','project_services')->withTimestamps();
    }
}
