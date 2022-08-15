<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

use App\Http\Requests\Post\PutRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * controller creado con el comando php artisan make:controller Dashboard/PostController -r -m Post
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*este post ayuda a la paginacion*/
        $posts=Post::paginate(6);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*este es un select all from categories
        $categories=Category::get();
        para usar pluck hay que darle la clave que es el id y el valor a mostrar que es el titulo*/
        $categories = Category::pluck('id', 'title');
        $post = new Post();

        // dd($categories);

        echo view('dashboard.post.create', compact('categories', 'post'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        /*$validated = $request->validate(StoreRequest::myRules());
       // dd($validated);
       // dd(request("title"));
        // echo $request->input('slug');*/
        //$validated = Validator::make($request->all(),StoreRequest::myRules());
       // dd($validated->errors());
       // $data = array_merge($request->all(),['image'=>'']);
        //dd($data);
        //se clona request por qu eno se puede manipular la data directamente
        $data = $request->validated();
        $data['slug']= Str::slug($data['title']);


        Post::create($data);

        // estas son diferentes formas de redireccionar
        //   return route("post.create");
        //return redirect("/post/create");
        //return redirect()->route("post.create");
        return to_route("post.index")->with('status',"Registro creado.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        echo view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Post $post)
    {
        return to_route("post.index")->with('status',"Registro actualizado.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       // echo "destroy";
        $post->delete();
        return to_route("post.index")->with('status',"Registro eliminado.");
    }
}
