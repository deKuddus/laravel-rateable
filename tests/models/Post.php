<?php

namespace Mak\Rateable\Tests\models;

use Illuminate\Database\Eloquent\Model;
use Mak\Rateable\Rateable;

class Post extends Model
{
    use Rateable;

    public $fillable = ['title', 'body'];

    public function ratings()
    {
        return $this->morphMany('Mak\Rateable\Tests\models\Rating', 'rateable');
    }
}
