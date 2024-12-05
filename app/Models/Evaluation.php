<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'user_id', 
        'instructor_id', 
        'ones', 
        'twos', 
        'threes', 
        'fours', 
        'fives'];

}
