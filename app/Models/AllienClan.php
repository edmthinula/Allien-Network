<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllienClan extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    /** @use HasFactory<\Database\Factories\AllienClanFactory> */
    use HasFactory;

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
