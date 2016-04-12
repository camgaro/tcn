<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" href="boostrap.js"></script>
	<script type="text/javascript" href="jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
			<label for="tipo_documento">Tipo de documento</label>
			<select id="Tipo_documento" class="form-control">
				<option value="">Cedula</option>
				<option value="">Cedula de extranjeria</option>
				<option value="">Pasaporte</option>
			</select>
			</div>
			<div class="col-lg-6">
			 	<label  for="numero_documento">Número de documento</label>	
		    	<input name="numero_documento" id="numero_documento" class="form-control" type="text" placeholder="Numero de documento">
			</div>
 		</div>
 		<div class="row">
 			<div class="col-lg-4">
 				<label for="fecha_nacimiento">Fecha de nacimiento</label>
 				<input class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento"> 
 			</div>
 			<div class="col-lg-3">
 				<label for="">Genero</label>
 				<div id="genero">
 				<label for="male">Masculino</label>
 				<input id="male" name="male" type="radio" value="Masculino">
 				<label for="female">Femenino</label>
 				<input id="female" name="female" type="radio" value="Femenino">
 				</div>
 			</div>
 			<div class="col-lg-5">
 				<label for="estado_civil">Estado civil</label>
 				<select class="form-control" id="estado_civil" name="estado_civil">
 					<option value="">Soltero</option>
 					<option value="">Casado</option>
 					<option value="">Unión libre</option>
 					<option value="">Separado(a)/Divorciado</option>
 					<option value="">Viudo(a)</option>
 				</select>
 			</div>
 		</div> 
 			<div class="row">
 				<div class="col-lg-4">
 					<label for="telefono">Número de telefono</label>
 					<input id="telefono" name="telefono" type="text" class="form-control">
 				</div>
 				<div class="col-lg-4">
 					<label for="pais">País</label>
 					<input type="text" id="pais" name="pais" class="form-control">
 				</div>
 				<div class="col-lg-4">
 					<label for="departamento">Departamento</label>
 					<input type="text" id="departamento" name="departamento" class="form-control">
 				</div>
 			</div>
 		   <div class="row">
 		   	  <div class="col-lg-6">
 		   	  	<label for="direccion">Dirección</label>
 				<input type="text" id="direccion" name="direccion" class="form-control">
 		   	  </div>
 		   	  <div class="col-lg-6">
 		   	  	<label for="nacionalidad">Nacionalidad</label>
 					<input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
 		   	  </div>
 		   </div>	
	   </div>
</body>
</html>