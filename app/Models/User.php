<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function role() {
        return $this->belongsTo(Role::class);
    }
    
    public function courses() {
        return $this->hasMany(Course::class, 'instructor_id');
    }
   
}
