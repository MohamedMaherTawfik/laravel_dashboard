<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact-uses';
    protected $primaryKey = 'id';
    protected $fillable = ['address', 'phone', 'email'];
}
