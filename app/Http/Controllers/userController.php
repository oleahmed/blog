<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Comment;

class userController extends Controller
{
    public function showPost($id)
    {
    	$post = Post::find($id);
    	$comment = $post->comments;
    	return view('user.showpost',compact(['post','comment']));
    }

    public function comment($id)
    {
    	$this->validate(request(),[
    		'comment' => 'required'
    	]);
    	User::find(Auth::id())->comment()->create([
    		'post_id' => $id,
    		'comment' => request('comment')
    	]);
    	return redirect()->back();
    }


    public function updateComment($id,$postId)
    {
    	Comment::find($id)->update([

    		'comment' => request('comment')

    	]);
    	return redirect()->route('user.post.show',$postId);
    }
}
