<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;
    protected $table = 'Participation';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'cost',
        'created_at',
        'updated_at',
    ];

    public function participation_services()
    {
        return $this->belongsToMany(Participation_services::class);
    }
}
