<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//comandos php artisan storage/link
class SubirArchivosController extends Controller
{
    //
    function index(){
    	return view("subir_archivo");
    }

//Request : peticion que esta haciendo el usuario hacia el formulario
    function subir(Request $request){

			$cod=$request->input("codigo");
			$file=$request->file("archivo");
			

			//echo $file -> getClientOriginalName();
		
			$ext = $file->getClientOriginalExtension();
			$nom="$cod.$ext";

			\Storage::disk('public')->put($nom,\File::put($nom, \File::get($file)));

if($ext=='jpg' || $ext=='png' ){
	echo '<img src="/GestorLaravel/public/storage/'.$nom.'" />';

}else{
	echo $nom;
}

    }

function eliminar($nom){
	$path = 'foto/'.$nom;
	//exit($path);
	\Storage::disk('public')->delete($path);
echo "Archivo $nom eliminado";

}

}
