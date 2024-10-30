<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class latest extends Model
{
    protected $table = 'latest-works';
    protected $primaryKey = 'id';
    protected $fillable = ['image'];
}
