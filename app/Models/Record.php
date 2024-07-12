<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'id_number',
        'email',
        'phone',
        'status',
    ];
}
