<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    protected $table = 'goals';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description'];
}
