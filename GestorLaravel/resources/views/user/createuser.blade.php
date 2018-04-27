<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container-fluid">
<div class="jumbotron">
	<h1 class="display-4">Nuevo Auto</h1></div></div>
<div>
	<form action="nuevo/crear" method="post" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>

			<input type="text" name="title" " class="form-control"  placeholder="Titulo" class="Titulo" required>
		</p>
		<p>
			<input type="text" name="body" class="form-control" placeholder="Descripcion"required>
		</p>
		<p>
			

			<select  name="user_id"  class="span12 input-mini" required>
             <option >
                	Selecionar..   </option>
                
              @foreach($users as $user) 
             
               <option name="user_id" value="{{$user->id}}"  >
                	{{$user->name}}


                </option>
                	@endforeach
           </select>
		</p>
		<p>
			<input type="submit" value="Guardar" class="btn btn-success" >
		</p>
	</form>
	
</div>