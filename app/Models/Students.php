<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillablel = [
        'name',
        'gender',
        'email',
        'phone',
        'grade',
         ];
}
