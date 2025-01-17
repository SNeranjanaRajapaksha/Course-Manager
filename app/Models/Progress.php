<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
}
