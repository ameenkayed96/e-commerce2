<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation_services extends Model
{
    use HasFactory;
    protected $table = 'participation_services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Participation_id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function participation()
    {
        return $this->belongsToMany(Participation::class);
    }
}
