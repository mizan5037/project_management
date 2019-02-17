<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
      public function projects()
    {
        return $this->hasMany('App\Model\Admin\Project');
    }
}
