<?php

namespace App\Http\Controllers\Dashboard;

use App\Tag;
//use App\Post;
use Illuminate\Http\Request;
use App\Models\post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{

    public function index()
    {

        $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(4);



        return view('dashboard.post.index', ['posts' => $posts]);
    }


    public function store(StorePostPost $request)
    {



        //$request->validate([
        //  'title' => 'required|min:5|max:500',
        //'url_clean' => 'required|min:5|max:500',
        //'content' => 'required|min:5'
        //]);

        //echo "hola mundo: " . $request->title;
        //$request->validated();

        Post::create($request->validated());

        return back()->with('status', 'post creado con exito');
    }



    public function create()
    {

    }

    public function show(Post $post)
    {

        //$post = Post::findOrFail($id);
        return view("dashboard.post.show", ['post' => $post]);

        //return view("dashboard.post.show", ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view("dashboard.post.edit", ['post' => $post]);

    }


    public function update(StorePostPost $request, Post $post){

            echo "hola mundo";

    }
}
