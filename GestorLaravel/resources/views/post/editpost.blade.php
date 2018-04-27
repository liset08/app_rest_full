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
			background-color: #E5E7E9 	}
		.jumbotron{
			width: 500px;
			height: 350px;
			text-align: center;
			margin: 0 auto;
			background-color: rgba(0, 10, 28, 0.7); 
			margin-top: 50px;
			border-radius: 4px;
			color: white;
}
select{
	color: #808B96;
	font-size: 15px;
}
	</style>

</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="/auto/index"><h1>Laravel</h1></a>

</nav>
<div class="jumbotron">

 <h1 class="display-4">Editar Post</h1>

	<form action="actualizar" method="post" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>

			<input type="text" name="id" value="{{$post->id}}" placeholder="ID" class="form-control" readonly="readonly" required>
		</p>
		<p>

			<input type="text" name="title" value="{{$post->title}}" placeholder="Titulo" class="form-control" required>
		</p>
		<p>
			<input type="text" name="body" value="{{$post->body}}" class="form-control" placeholder="Descripcion"required>
		</p>
		
		<p>
			

			<select  name="user_id" class="span12 input-mini form-control" required >
             <option >
                	Selecionar..   </option>
                
             @foreach($users as $user)  


              <option  value="{{$user->id}}"  >
                	{{$user->name}}


                </option>
                	    @endforeach
           </select>
		</p>
	
		
		<p>
			<input type="submit" value="Actualizar" class="btn-lg btn-success " >
		</p>
	</form>
	
  
</div>
</div>
	
</div>
</body>
</html>

