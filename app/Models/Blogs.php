<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category',
        'title',
        'short_desc',
        'desc',
        'created_by',
        'created_at',
        'updated_at',
        'img',
    ];
}
