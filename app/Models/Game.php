<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Game extends Model
{
    use HasFactory;
    protected $primaryKey = 'game_id';

    public function category()
    {
        return $this->hasOne(Category::class,'category_id','category_id');
    }

    public function shortName()
    {
        return Str::limit(trim($this->name), 10);
    }

    public function likeCount(){
        $count = UserLikedDislikedGames::where('game_id',$this->game_id)->where('like_status',1)->count();
        return $count;
    }

    public function dislikeCount(){
        $count = UserLikedDislikedGames::where('game_id',$this->game_id)->where('like_status',0)->count();
        return $count;
    }
    public static function gamesCount()
    {
        return Game::count();
    }
}
