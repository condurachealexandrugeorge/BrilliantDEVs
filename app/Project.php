<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'domain_name', 'wp_user', 'wp_password'
    ];
    public function users() {
        return $this->belongsToMany('App\User','user_project','project_id','user_id');
    }
}
