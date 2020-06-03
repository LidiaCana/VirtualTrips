<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'user_id', 'img'
       ];
}