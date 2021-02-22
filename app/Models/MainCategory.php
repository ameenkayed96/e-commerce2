<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $table = 'main_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'translation_lang',
        'translation_of',
        'name',
        'slug',
        'photo',
        'active',
        'created_at',
        'updated_at',
    ];

    //always return active items just
    public function scopeActive($query ){
        return $query -> where('active',1);
    }

    public function scopeSelection($query ){
        return $query -> select('abbr','name','direction','active');
    }
}
