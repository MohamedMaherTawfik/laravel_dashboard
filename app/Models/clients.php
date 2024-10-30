<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = ['image'];
}
