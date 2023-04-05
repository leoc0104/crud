<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelStudent extends Model
{
    protected $table = 'students';

    public function relUsers(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
