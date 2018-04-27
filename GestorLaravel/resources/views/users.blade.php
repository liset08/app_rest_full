<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container-fluid">
<div class="jumbotron">
	<h1 class="display-4">Posts</h1></div></div>

<div class="table-responsive">
	

<table class="table table-striped">
	
<select  class="span12 input-mini" required>
            
              <option value="">Seleccione</option>
              @foreach($users as $user) 
               <option>
                	{{$user->id}}


                </option>
                	@endforeach
           </select>

                

</table></div>