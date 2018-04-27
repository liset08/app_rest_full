<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    
   public function index(){


$posts =Post::all();
$datos = array('posts' => $posts);
return view('posts',$datos);

}


public function create(){
$users =User::all();
$val = array('users' => $users);
	return view('post.createpost',$val);	
}

public function store(Request $request){
$post = new Post;
$post->title = $request->input('title');
$post->body = $request->input('body');
$post->user_id = $request->input('user_id');
$post->save();
return redirect('post');
}

//
//public function store(Request $request){
//

public function edit($id){
$users =User::all();
$val = array('users' => $users);

	$post = Post::find($id);
	$datos = array(
		'post' => $post
	);
  

	return view('post.editpost',$datos,$val);
}

public function update(Request $request){
	$id = $request->input('id');
	$post = Post::find($id);
	$post->title = $request->input('title');
	$post->body = $request->input('body');
	$post->user_id= $request->input('user_id');
	$post->save();
	return redirect('post');
}

public function destroy($id){
$post = Post::find($id);
	$post->delete();
	return redirect('post');
}



//index user
 public function indexuser(){

$users =User::all();
$val = array('users' => $users);
return view('users',$val);

}
public function createuser(){

	return view('user.createuser');	
}
}



/*foreach ($posts as $fila ) {
	echo $fila->title;
	echo "-";
	echo $fila->user->name;
	echo "<br/>";
}
    }}/*



/*CRUD de la tabla post TAREAAAAA-A.AA-A
-LISTA -NUEVO  -EDITAR --
NUEVO (TITLE(CAJA DE TXTO)
BODY(TEXTAREA)
USERID(COMBOOBOX))

<select name=usuario