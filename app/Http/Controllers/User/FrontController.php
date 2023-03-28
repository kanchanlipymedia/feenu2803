<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Category;

class FrontController extends Controller
{
    public function index(Request $request){

        $categoryId = $request->categoryId;
        $category = Category::where('category_id',$categoryId)->first();
        if(empty($category))
            $games = Game::orderBy('game_id','DESC')->get();
        else
            $games = Game::where('category_id',$categoryId)->orderBy('game_id','DESC')->get();
        return view('frontend.index',['games'=>$games]);
    }

    public function newGames(Request $request){

        $categoryId = $request->categoryId;
        $category = Category::where('category_id',$categoryId)->first();
        if(empty($category))
            $games = Game::orderBy('game_id','DESC')->take(5)->get();
        else
            $games = Game::where('category_id',$categoryId)->orderBy('game_id','DESC')->take(5)->get();

        return view('frontend.index',['games'=>$games]);
    }

    public function userProfile($userId, Request $request)
    {
        $user = User::where('id',$userId)->where('user_type',2)->first();
        if(empty($user))
            abort(404);

        $favoriteGames = Game::join('user_favorite_games', 'games.game_id', '=', 'user_favorite_games.game_id')->where('user_id',$user->id)->where('favorite_status',1)->get();

        return view('frontend.user-profile',['user'=>$user, 'favoriteGames'=>$favoriteGames]);
    }

    public function dashboard(){

        return view('user.dashboard');
    }

}
