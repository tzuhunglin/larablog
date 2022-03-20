<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Posts;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aPostsList = Posts::all();
        return view('posts.index', ['aPostsList' => $aPostsList]);
    }

    public function read($postid)
    {
        $oPostData = Posts::find($postid);
        return view('posts.read', ['oPostData' => $oPostData]);
    }

    public function store(Request $request)
    {
        $posts = Posts::create([
                                'title' => $request->input('title'),
                                'content' => $request->input('content'),
                                'userid' => 1,
                                'userid2' => 1,
                                'title2' =>$request->input('title'),
                                'content2' =>$request->input('content')
                            ]);
        $posts->save();
        return redirect()->route('postread',['postid'=>$posts->id]);
    }

    public function update(Request $request)
    {
        $posts = Posts::find($request->input('id'));
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();
        return redirect()->route('postread',['postid'=>$posts->id]);
    }
}
