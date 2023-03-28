<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Game;
use App\Models\UserFavoriteGame;
use App\Models\UserLikedDislikedGames;

class FCommentController extends Controller
{
    public function saveComment(Request $request){

        $user = Auth::user();
        $gameId = $request->gameId;
        $commentText = $request->comment;
        $parentCommentId = $request->parentCommentId;
        // dd($gameId,$comment);

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game)){
            $response = [
                'status' => 'failed',
                'message' => 'Game not found'
            ];
            return response()->json($response);
        }

        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->game_id = $gameId;
        $comment->comment = $commentText;

        if(!empty($parentCommentId))
            $comment->parent_id = $parentCommentId;

        $comment->save();

        $response = [
            'status' => 'success',
            'message' => 'Comment added successfully'
        ];
        return response()->json($response);
    }

    public function updateFavoriteStatus(Request $request){

        $user = Auth::user();
        $gameId = $request->gameId;
        $favoriteStatus = $request->favoriteStatus;
        // dd($gameId,$favoriteStatus);

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game)){
            $response = [
                'status' => 'failed',
                'message' => 'Game not found'
            ];
            return response()->json($response);
        }

        $userFavoriteGame = UserFavoriteGame::where('game_id',$gameId)->where('user_id',$user->id)->first();
        if(empty($userFavoriteGame)){
            $userFavoriteGame = new UserFavoriteGame();
            $userFavoriteGame->user_id = $user->id;
            $userFavoriteGame->game_id = $gameId;
        }

        $userFavoriteGame->favorite_status = $favoriteStatus;
        $userFavoriteGame->save();

        $response = [
            'status' => 'success',
            'message' => 'favorite updated successfully'
        ];
        return response()->json($response);
    }

    public function updateLikeStatus(Request $request){

        $user = Auth::user();
        $gameId = $request->gameId;
        $likeStatus = $request->likeStatus;
        // dd($gameId,$favoriteStatus);

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game)){
            $response = [
                'status' => 'failed',
                'message' => 'Game not found'
            ];
            return response()->json($response);
        }

        $userLikeDislikeGame = UserLikedDislikedGames::where('game_id',$gameId)->where('user_id',$user->id)->first();
        if(empty($userLikeDislikeGame)){
            $userLikeDislikeGame = new UserLikedDislikedGames();
            $userLikeDislikeGame->user_id = $user->id;
            $userLikeDislikeGame->game_id = $gameId;
        }

        $userLikeDislikeGame->like_status = $likeStatus;
        $userLikeDislikeGame->save();

        $response = [
            'status' => 'success',
            'message' => 'like/dislike updated successfully',
            'data'=>[
                'likeCount'=> $game->likeCount(),
                'dislikeCount'=> $game->dislikeCount()
            ]
        ];
        return response()->json($response);
    }
}
