<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal',
        'bet',
        'player_id',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
