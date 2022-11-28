<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'coord_x',
        'coord_y',
    ];
    public function users()
    {
        return $this->hasMany(Location::class);
    }
}
