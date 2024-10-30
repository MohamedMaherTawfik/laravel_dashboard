<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partners extends Model
{
    protected $table = 'partners';
    protected $primaryKey = 'id';
    protected $fillable = ['image'];
}
