<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeslot extends Model
{
    /** @use HasFactory<\Database\Factories\TimeslotFactory> */
    use HasFactory, SoftDeletes;
}
