<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Http\Requests;

class SearchController extends Controller
{
    public function index(Request $request)
	{
		//search data indexed by ElasticSearch
		if($request->has('search')){
    		//convert to aaary for accessing as array in view
			$posts = Post::search($request->input('search'))->toArray();
    	}
        return view('search_post',compact('posts'));
	}
	
	 public function create(Request $request)
	{
		//Validation of request data
		$this->validate($request, [
	    	'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
        ]);
		
		$tags = implode (", ", $request->tags);
		
		//Elastic search cretae and indexing from database
        //$post = Post::create($request->all());
        $post = Post::create([
			'title'=>$request->title,
			'content'=>$request->content,
			'tags'=>$tags,
		]);
        $post->addToIndex();

        return redirect()->back();
	}
	
	public function addDataToIndex()
	{
		$posts = Post::all();
		
		foreach($posts as $post)
		{
			$post->addToIndex();
			var_dump($post);
		}
		return "ok";
	}
}
