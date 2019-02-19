<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
public function index(){
    return view('welcome');
}
public function dashboard(){
    $posts = Post::where('user_id', Auth::user()->id)->get();
    return view('pages.dashboard')->with('posts', $posts);

}
public function posts(){
    return view('pages.posts.posts');

}
public function user_post($id){
    $post = Post::find($id)->first();
    return view('pages.posts.user_post')->with(compact('post',$post));

}
}