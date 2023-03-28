<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function comments(Request $request){

        $comments = Comment::orderBy('comment_id','DESC')->get();
        return view('admin.comments',['comments'=>$comments]);
    }
    public function updateCommentStatus(Request $request){

        $commentId = $request->comment_id;
        $status = $request->status;
        $comment = Comment::where('comment_id',$commentId)->first();
        $comment->status=$status;
        $comment->save();

        $response = [
            'status'=>'success',
            'message'=> 'Status Updated Successfully'
        ];
        return response()->json($response);
    }

}
