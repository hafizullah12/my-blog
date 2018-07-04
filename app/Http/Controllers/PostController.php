<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function savePost($request,$imageUrl)
    {
    $post = new Post();
    $post->category_id = $request->category_id;
    $post->user_id = Auth::user()->id;
    $post->title = $request->title;
    $post->description = $request->description;
    $post->feature_image = $imageUrl;
    $post->status = $request->status;
    $post->save();   
    }
   
public function store(Request $request)
{

    $featureImage = $request->file('feature_image');
    $name = $featureImage->getClientOriginalName();
    $uploadPath = 'public/feature_img/';
    $featureImage->move($uploadPath, $name);
    $imageUrl = $uploadPath . $name;
    $this->savePost($request, $imageUrl);
    return redirect()->back()->with('success', 'Post Created Successfully');   
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        return view('admin.category.edit');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
       return redirect()->back()->with('success', 'Post Delete Successfully');   
     }
}
