<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'rev_text',
        'doc_name',
        'doc_job',
        'created_at',
        'updated_at',
    ];

    public function Dentist(){
        return $this->belongsTo(Dentist::class,'doc_id');
    }
}
