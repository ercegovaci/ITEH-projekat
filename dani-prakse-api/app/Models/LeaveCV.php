<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveCV extends Model
{
    use HasFactory;

    protected $table = 'leave_cv';

    protected $fillable = [
        'ime',
        'prezime',
        'broj_telefona',
        'email',
        'cv_putanja',
    ];
}
