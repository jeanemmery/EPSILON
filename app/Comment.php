<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable')->latest();
    }
}

