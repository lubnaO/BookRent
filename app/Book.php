<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'BookName', 'price', 'Description', 'City', 'image' ];
}
