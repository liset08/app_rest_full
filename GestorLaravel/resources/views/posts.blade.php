<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Exo|Pacifico" rel="stylesheet">
	<title></title>
	<style type="text/css">
		body{
			font-family: 'Exo', sans-serif;
			background-color: #E5E7E9  ;
		}
	.table{
			background-color: white;
			}
	</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="/auto/index"><h1>Laravel</h1></a>

</nav>
<div class="container-fluid">

	<h1 >Posts</h1>
<a class="btn alert-success" href="post/nuevo"> Nuevo </a><br><br>

<div class="table-responsive">
	

<table class="table table-bordered">
	<tr>

		<th>Id</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Cliente</th>
		<th>Accion</th>

	</tr>
	@foreach($posts as $post)
	<tr>
		<th>{{$post->id}}</th>
		<th>{{$post->title}}</th>
		<th>{{$post->body}}</th>
		<th>{{$post->user->name}}</th>
		<th>
			<a class="btn alert-info" href="post/editar/{{$post->id}}">Editar</a>
			<a class="btn alert-danger" href="post/eliminar/{{$post->id}}">Eliminar</a>
		</th>
	</tr>
	@endforeach

</table></div>
</div>
</body>
</html>
