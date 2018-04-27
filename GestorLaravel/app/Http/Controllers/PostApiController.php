<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostApiController extends Controller {
    

	public function index(){

		$array = Post::all();
		
		return response()->json($array,200);
	}

public function store(Request $request){
	$data =$request->all();
		$object=Post::create($data);
$rpta=["id"=>$object->id];
	return response()->json($rpta, 200);

}
//api/post/2  Metodo  | GET
public function show(Post $post){
	return $post;
}

// Ej: api/post  |PUT

public function actualizar(Request $request,Post $post){

	$data =$request->all();
	$post=update($data);
	
	return response()->json($post, 200);
}

// Ej: api/post/3  |DELETE
public function destroy(Post $post){
	$post->delete();
		return response()->json(null, 204);


}


}