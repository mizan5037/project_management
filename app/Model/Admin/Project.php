<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $fillable = [
        'name',
        'client_name',
        'description',
        'price',
        'due',
        'advance',
        'start_date',
        'client_id',
        'end_date',
        'created_at',
        'updated_at',
    ];

   
    public function client()
    {
        return $this->belongsTo('App\Model\Admin\Client');
    }


   public function employees()
    {
    	return $this->belongsToMany('App\Model\Admin\Employee','project_employees')->withTimestamps();
    }

    public function services()
    {
    	return $this->belongsToMany('App\Model\Admin\Service','project_services')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Model\Admin\Category','project_categories')->withTimestamps();
    }
}
