<?php

namespace App\Models;

use App\Http\Controllers\TopicsController;

class Reply extends Model
{
    protected $fillable = ['content'];
    public function topic() {
        return $this->belongsTo(Topic::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
