<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user_id=auth()->id();
        $post = Post::find($request->get('post_id'));
        $comment  = $post->comments()->save($comment);
        if($request->wantsJson()){
            $html = view("partials._single_comment",["comment"=>$comment,'post_id'=>$post->id])->render();
            return response()->json(['html'=>$html,'success'=>true]);   
        }else{
            return redirect()->back();
        }
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user_id = auth()->id();
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));
        $comment  = $post->comments()->save($reply);

        if($request->wantsJson()){
            $html = view("partials._single_comment",["comment"=>$comment,'post_id'=>$post->id])->render();
            return response()->json(['html'=>$html,'success'=>true]);
        }else{
            return redirect()->back();
        }
    }
}
