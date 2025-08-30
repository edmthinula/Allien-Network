<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $fillable = ['name', 'population', 'discription','allien_clan_id'];

    /** @use HasFactory<\Database\Factories\AreaFactory> */
    use HasFactory;

    public function clan()
    {
        return $this->belongsTo(AllienClan::class, 'allien_clan_id', 'id');
    }
}
