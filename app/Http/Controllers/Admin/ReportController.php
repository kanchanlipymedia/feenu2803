<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Game;

class ReportController extends Controller
{
    public function saveReport(Request $request){

        $userId = (!empty(Auth::user())) ? Auth::user()->id : NULL;
        $gameId = $request->gameId;
        $commentText = $request->comment;
        // dd($gameId,$comment);

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game)){
            $response = [
                'status' => 'failed',
                'message' => 'Game not found'
            ];
            return response()->json($response);
        }

        $report = new Report();
        $report->user_id = $userId;
        $report->game_id = $gameId;
        $report->comment = $commentText;

        $report->save();

        $response = [
            'status' => 'success',
            'message' => 'Reported successfully'
        ];
        return response()->json($response);
    }

    public function reports(Request $request){

        $reports = Report::orderBy('report_id','DESC')->get();
        return view('admin.reports',['reports'=>$reports]);
    }

}
