<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
