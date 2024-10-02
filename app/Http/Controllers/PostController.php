<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request ->all());
        //validate form
        $this->validate($request, [
            
            
            'nama'          => 'required|min:1',
            'jk'            => 'required|min:5',
            'golongandarah' => 'required|min:5',
            'tempatlahir'   => 'required|min:1'
            // 'tanggallahir'  => 'required|min:5',
            // 'agama'         => 'required|min:5',
            // 'hobi'          => 'required|min:5',
            // 'email'         => 'required|min:5',
            // 'alamat'        => 'required|min:5',
            // 'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        


        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([

          
            'nama'          => $request->nama,
            'jk'            => $request->jk,
            'golongandarah' => $request->golongandarah,
            'tempatlahir'   => $request->tempatlahir
            // 'agama'         => $request->agama,
            // 'hobi'          => $request->hobi,
            // 'email'         => $request->email,
            // 'alamat'        => $request->alamat,
            // 'image'         => $image->hashName()

        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
