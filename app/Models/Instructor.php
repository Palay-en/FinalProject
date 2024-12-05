<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $primaryKey = 'inst_id';

    protected $fillable = [
        'inst_name',
        'department',
        'total_evaluations', 
        'ones', 
        'twos', 
        'threes', 
        'fours', 
        'fives'
    ];

    

}
