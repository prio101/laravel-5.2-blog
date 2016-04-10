<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Model\Blog;


use App\Http\Requests;

class AdminController extends Controller
{
    //visit the index admin
    public function index() {
        $Blog = Blog::class;
        $posts = $Blog::all();

        return view('admin.index' , ['posts' => $posts]);

    }

    /*
     *  New post creation
     * */
    public function create() {
        return view('admin.new');
    }

    /*
     *  Store post data into page
     * */
    public function store(Requests\PostRequest $request){


        Blog::create($request->all());

        return Redirect::to('admin');
    }





    public function edit($id) {
        $Blog = Blog::class;
        $blog = $Blog::findOrFail($id);

        return view('admin.edit', ['blog'=>$blog]) ;
    }

    /*
     * Update data
     * */

    public function update(Requests\PostRequest $request, $id) {

        $post = Blog::find($id);
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->save();
        return Redirect::to('admin');
    }

    /*
     * Destroy method
     * */

    public function destroy($id) {
        $Blog = Blog::class;
        $post = $Blog::find($id);

        $post->delete();

        return Redirect::to('admin');
    }
}
