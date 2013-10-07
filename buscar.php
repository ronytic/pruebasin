<?php
extract($_POST);
$parametros=array("Cedula"=>$ci,
				"ApellidoPaterno"=>$paterno,
				"ApellidoMaterno"=>$materno,
				"Nombres"=>$nombres
);
include_once("config.php");
require_once("lib/nusoap.php");
$clientesoap=new nusoap_client($url,true);
$respuesta=$clientesoap->call("MensajeSolicitudPersonaNatural",$parametros);
$respuesta=array("MitPersonaNatural"=>
				array("Nit"=>"123",
					"RazonSocial"=>"Razon Social",
					"DescripcionTipoPersona"=>"Descripcion"
				)
);
print_r($respuesta);
?><table border="1"><tr><td>Nit</td><td>Razon Social</td><td>Descripcion Tipo Persona</td></tr><?php
foreach($respuesta as $datos){
	?>
    <tr>
    	<td><?php echo $datos['Nit']?></td>
        <td><?php echo $datos['RazonSocial']?></td>
        <td><?php echo $datos['DescripcionTipoPersona']?></td>
        <td><a href="datospadron.php?nit=<?php echo $datos['Nit']?>" target="_blank">Ver Datos Padron</a></td>
        <td><a href="indexextracto.php?nit=<?php echo $datos['Nit']?>" target="_blank">Extracto Tributario</a></td>
    </tr>
    <?php
}
?>
</table>