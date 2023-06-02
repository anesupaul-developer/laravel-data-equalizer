<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class RandomJoke extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mongodb';

    protected $table = 'jokes';

    protected $guarded = [];
}
