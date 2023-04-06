<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user = Auth::user();
        $recentPlayGameIds = $request->cookie('game-ids');
        $recentPlayGameIdsArray = json_decode($recentPlayGameIds);
        $recentPlayGames = [];
        if(!empty($recentPlayGameIdsArray)){
            $ids_ordered = implode(',', $recentPlayGameIdsArray);
            $recentPlayGames = Game::whereIn('game_id',$recentPlayGameIdsArray)->orderByRaw("FIELD(game_id, $ids_ordered)")->get();
        }
        $favoriteGames = Game::join('user_favorite_games', 'games.game_id', '=', 'user_favorite_games.game_id')->where('user_id',$user->id)->where('favorite_status',1)->get();

        return view('frontend.profile',['recentPlayGames'=>$recentPlayGames,'favoriteGames'=>$favoriteGames]);
    }
    public function editprofile()
    {
        $user=Auth::user();
        return view('frontend.editprofile',(compact('user')));
    }
    public function profileUpdate(Request $request){
        //validation rules
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $imgname = "";
        if($request->image=='image'){
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg'
            ]);

            $request->image->store('images/profile','public');
            $imgname = $request->image;
        }
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->gender=$request['gender'];
        $user->about=$request['about'];      
        if(!empty($imgname)) {
            $user->image = $imgname;
        
    } else{
        $user->image = $imgname;
    }                        
        $user->fblink=$request['fblink'];   
        $user->twlink=$request['twlink'];   
        $user->instalink=$request['instalink'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
}
