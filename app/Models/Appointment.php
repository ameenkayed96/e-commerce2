<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'doc_id',
        'user',
        'date',
        'phone',
        'name',
        'created_at',
        'updated_at',
    ];
}
