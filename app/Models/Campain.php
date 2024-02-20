<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campain extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'leader-firstname',
        'leader-lastname',
        'leader-phone',
        'start-date',
        'finish-date',
        'description',
        'geometry-location',
        'campain-name',
    ];

    protected $table = 'campain';

    protected $casts = [
        'start-date' => 'date',
        'finish-date' => 'date',
        'leader-phone' => 'hashed',
    ];

}
