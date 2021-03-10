<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sender_name',
        'sender_email',
        'sender_phone',
        'subject',
        'text',
        'created_at',
        'updated_at',
    ];
}
