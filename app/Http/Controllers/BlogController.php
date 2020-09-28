<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function home(){
        $blogs = Blog::get()->all();
        $recent_blogs = Blog::take(3)->get()->all();
        return view('blog.home')->with('blogs', $blogs)->with('recent_blogs', $recent_blogs);
    }

    public function add(){
        return view('blog.add');
    }

    public function add_post(Request $request){

        $name = $request->image->getClientOriginalName();
        $path = 'blogs/';

        $request->image->move(public_path($path), $name);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = Auth::user()->id;
        $blog->path = $path.$name;
        $blog->save();
        return redirect(route('blogHome'));
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('blog.edit')->with('blog', $blog);
    }

    public function edit_post($id, Request $request){

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect(route('blogHome'));
    }

    public function delete($id){
        $blog = Blog::find($id);
        unlink(public_path($blog->path));
        $blog->delete();
        return redirect(route('blogHome'));
    }

    public function article($id){
        $blog = Blog::find($id);
        $recent_blogs = Blog::take(3)->get()->all();
        return view('blog.article')->with('blog', $blog)->with('recent_blogs', $recent_blogs);
    }
}
