<?php
extract($_POST);
$parametros=array("Nit"=>$nit,
				"PeriodoDesde"=>$PeriodoDesde,
				"PeriodoHasta"=>$PeriodoHasta,
);
include_once("config.php");
require_once("lib/nusoap.php");
$clientesoap=new nusoap_client($url,true);
$respuesta=$clientesoap->call("ConsultarExtractoTributario",$parametros);
$respuesta=array("MensajeRespuestaExtractoTributario"=>
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
    </tr>
    <?php
}
?>
</table>