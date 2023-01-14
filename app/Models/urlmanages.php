<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urlmanages extends Model
{
    use HasFactory;
    protected $fillable = [
        'shortlink', 'link'
    ];
}
