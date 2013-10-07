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

<form action="extracto.php" method="post">
	<label for="nit">Nit</label>
    <input type="text" name="nit" id="nit" value="<?php echo $_GET['nit']?>">
    <label for="PeriodoDesde">PeriodoDesde</label>
    <input type="text" name="PeriodoDesde" id="PeriodoDesde" value="20130101">
    <label for="PeriodoHasta">PeriodoHasta</label>
    <input type="text" name="PeriodoHasta" id="PeriodoHasta" value="20131230">
    <input type="submit" value="Buscar Periodo">
</form>
</fieldset>
</body>
</html>