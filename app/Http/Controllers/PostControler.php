<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $product=Post::all();
        return view('pages.product')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Name'=>'required',
            'Price'=>'required',
            'Description'=>'required'
        ]);
        $post= new POST;
        $post->Name=$request->input('Name');
        $post->Price=$request->input('Price');
        $post->Description=$request->input('Description');
        $post->save();
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post=POST::find($id);
        return view('post.viewid')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=POST::find($id);
        return view("post.edit")->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Name'=>'required',
            'Price'=>'required',
            'Description'=>'required'
        ]);
        $post=Post::find($id);
        $post->Name=$request->input('Name');
        $post->Price=$request->input('Price');
        $post->Description=$request->input('Description');
        $post->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::Find($id);
        $post->delete();
        return redirect('posts');
    }
}
