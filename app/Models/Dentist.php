<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Dentist extends Model
{
    use HasFactory;
    protected $table = 'dentists';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'job',
        'img',
        'facebook',
        'twitter',
        'created_at',
        'updated_at',
        'Qualification',
        'Certification',
        'Professional_Skills',
        'Education',
        'Awards',
        'bio'
    ];
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'doc_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'doc_id');
    }
}
