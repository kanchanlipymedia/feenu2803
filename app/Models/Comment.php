<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey = 'comment_id';

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function game()
    {
        return $this->hasOne(Game::class,'game_id','game_id');
    }

    public function parentComment()
    {
        return $this->hasOne(Comment::class,'parent_id','comment_id');
    }

    public function replyComment(){
        $comments = Comment::where('parent_id',$this->comment_id)->orderBy('comment_id','DESC')->get();
        return $comments;
    }
    public static function commentCount()
    {
        return Comment::count();
    }
}
