<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'publication_date',
        'technologies_used'
    ];

    protected $casts = [
        'publication_date' => 'datetime:Y-m-d',
    ];
}
