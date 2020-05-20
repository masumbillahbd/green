<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Auth;


class PostController extends Controller
{
    
    public function createPost(){

        $categories = Category::all();
        $tags = Tag::all();
    	return view('backEnd.Post.createPost', compact('categories', 'tags'));
    }

    public function storePost(Request $request){

    	$this->validate($request, [
    		'title' => 'required',
    		'sub_title' => 'required',
    		'writer_name' => 'required',
    		'post_content' => 'required',
    		'image' => 'required',
    	]);

    	$post = new Post();

    	$slug = str_replace(' ', '-', $request->title);

        $post->user_id = Auth::id();

    	$post->title = $request->title;
    	$post->slug = $slug;
    	$post->sub_title = $request->sub_title;
    	$post->writer_name = $request->writer_name;
    	$post->post_content = $request->post_content;
    	$post->post_status = $request->post_status;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('Y-m-d').'_'.time().'.'.$extension;
            $file->move('Upload/News_Image', $fileName);
            $post->image = $fileName;

        }else{
            return $request;
            $post->image = '';
        }
    	
        $post->save();

        $post->categories()->sync($request->categories, false);
        $post->tags()->sync($request->tags, false);
    	return redirect()->back()->with('message', 'News Save successfully');
    }



    public function managePost (){
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $user = Auth::user();

        return view('backEnd.Post.managePost', ['posts' => $posts , 'user' => $user ]);
    }

    public function viewPost($id){
        $postView = Post::find($id);
        // dd($postView);
        return view('backEnd.Post.viewPost' , compact('postView'));
    }


    public function editPost($id){
        $postById = Post::where('id' , $id)->first();

        return view('backEnd.Post.editPost', ['postById' => $postById]);
    }

    public function updatePost(request $request){

        $postEditById = Post::find($request->id);

        $slug = str_replace(' ', '-', $request->title);

        $postEditById->title = $request->title;
        $postEditById->slug = $slug;
        $postEditById->sub_title = $request->sub_title;
        $postEditById->writer_name = $request->writer_name;
        $postEditById->post_content = $request->post_content;
        $postEditById->post_status = $request->post_status;

        if($postEditById){

            if($request->hasfile('image')){
                unlink('Upload/News_Image/'.$postEditById->image);
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = date('Y-m-d').'_'.time().'.'.$extension;
                $file->move('Upload/News_Image', $fileName);
                $postEditById->image = $fileName;
            }

        }else{
            return $postEditById->image;
        }
        
        $postEditById->save();
        return redirect('/post/manage')->with('message', 'Post Update successfully');
    }

    public function deletePost($id){
        $post = post::find($id);

        // print_r($post);
        unlink('Upload/News_Image/'.$post->image);

        $post->delete();

        return redirect('/post/manage')->with('message', 'Post Delete successfully');

    }


    public function search(Request $request){

        // $this->validate($request, [
        //     'search' => 'required,
        // ]);

        $search_text = $request->search;

        $searchResult = Post::orderBy('id', 'desc')
        ->where('title', 'like', '%'.$search_text.'%')
        ->orWhere('sub_title', 'like', '%'.$search_text.'%')
        ->get();

        return view('backEnd.Post.searchView', compact('searchResult'));
    }
}
