<?php

namespace laramak\Rateable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Rating extends Model
{
    public $fillable = ['rating', 'reviews'];

    public function rateable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        $userClassName = Config::get('auth.model');
        if (is_null($userClassName)) {
            $userClassName = Config::get('auth.providers.users.model');
        }

        return $this->belongsTo($userClassName);
    }
}
