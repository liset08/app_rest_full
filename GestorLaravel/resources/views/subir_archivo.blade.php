<!DOCTYPE html>
<html>
<head>
	<title>Subir Archivo</title>
</head>
<body>
 <form method="post" enctype="multipart/form-data">
<label>Codigo</label><br>
{{csrf_field()}}
<input type="text" name="codigo"/>
	 	<br>
	 	<label>Archivo</label><br>

	 	<input type="file" name="archivo"/>
		<br><br>
	    <input type="submit" name="Subir Archivo"/>

 	
 </form>
</body>
</html>