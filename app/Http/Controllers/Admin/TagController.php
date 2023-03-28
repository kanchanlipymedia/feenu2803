<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function tags(){

        $tags = Tag::orderBy('tag_id','DESC')->get();
        // dd($tags);
        return view('admin.tags',['tags'=>$tags]);
    }

    public function addTag(Request $request){

        if ($request->isMethod('post')) {
            $name = $request->name;
            $slug = strtolower($name);
            $tag = new Tag();
            $tag->name = $name;
            $tag->slug = $slug;
            $tag->save();
            return redirect()->route('admin.tags');
        }
        return view('admin.tags_add');
    }

    public function edittag($tagId, Request $request){

        $tag = Tag::where('tag_id',$tagId)->first();
        if(empty($tag))
            abort(404);

        if ($request->isMethod('post')) {
            $name = $request->name;
            $slug = strtolower($name);
            $tag->name = $name;
            $tag->slug = $slug;
            $tag->save();
            return redirect()->route('admin.tags');
        }
        return view('admin.tags_add',['tag'=>$tag]);
    }

    public function deletetag($tagId, Request $request){

        $tag = Tag::where('tag_id',$tagId)->first();
        if(empty($tag))
            abort(404);

        $tag->delete();
        return redirect()->route('admin.tags');

    }
}
