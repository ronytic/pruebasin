<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
	body{
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		background-color:#F2F2F2;
	}
	fieldset{
		border:#39F 1px solid;	
	}
	legend{
		background-color:#39F;
		padding:15px;
		color:#FFF
	}
	label{
		display:block;	
	}
	input{
		border:#CCCCCC 1px solid;	
		padding:8px;	
	}
	input:focus{
		outline:none;
		border:#0FB1FF 1px solid;	
	}
	input[type=submit]{
		background-color:	#3399FF;
		color:#FFF;
	}
</style>
</head>

<body>
<fieldset>
	<legend>Buscar Persona</legend>

<form action="buscar.php" method="post">
	<label for="ci">CI</label>
    <input type="text" name="ci" id="ci">
    <label for="paterno">Paterno</label>
    <input type="text" name="paterno" id="paterno">
    <label for="materno">Materno</label>
    <input type="text" name="materno" id="materno">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" id="nombres">
    <input type="submit" value="Buscar">
</form>
</fieldset>
</body>
</html>