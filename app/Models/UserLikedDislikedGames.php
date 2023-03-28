<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLikedDislikedGames extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_liked_disliked_game_id';

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function game()
    {
        return $this->hasOne(Game::class,'game_id','game_id');
    }
}
