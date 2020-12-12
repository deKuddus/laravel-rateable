<?php

namespace laramak\Rateable\Tests\models;

use Illuminate\Database\Eloquent\Model;
use laramak\Rateable\Rateable;

class Post extends Model
{
    use Rateable;

    public $fillable = ['title', 'body'];

    public function ratings()
    {
        return $this->morphMany('laramak\Rateable\Tests\models\Rating', 'rateable');
    }
}
