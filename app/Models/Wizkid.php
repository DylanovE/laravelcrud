<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wizkid extends Model
{
    use HasFactory;

    protected $table = 'Wizkid';

    protected $fillable = [
        'name', 'description', 'link', 'active'
    ];
}
