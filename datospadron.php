<?php
extract($_GET);
$parametros=array("Nit"=>$nit,
);
include_once("config.php");
require_once("lib/nusoap.php");
$clientesoap=new nusoap_client($url,true);
$respuesta=$clientesoap->call("ConsultarDatosContribuyenteActuales",$parametros);
$respuesta=array("ConsultarDatosContribuyenteActualesResult"=>
				array("Nit"=>"123",
					"RazonSocial"=>"Razon Social",
					"DescripcionTipoPersona"=>"Descripcion",
					"ActividadesEconomicas"=>array("MitActividadEconomica"=>
								array("DescripcionActividad"=>"DescripcionActividad",
									"DescripcionTipoActividad"=>"DescripcionTipoActividad",
									"FechaDesde"=>"FechaDesde",
									"FechaHasta"=>"FechaHasta"
								)
					),
					"ObligacionesTributarias"=>array("MitObligacionTributaria"=>
							array("DescripcionObligacion"=>"DescripcionObligacion",
								"FechaDesde"=>"FechaDesde",
								"FechaHasta"=>"FechaHasta",
								
							)
					),
					"PersonasContribuyente"=>array("MitPersonasContribuyente"=>
							array("Cedula"=>"Cedula",
								"NombreCompleto"=>"NombreCompleto",
							)
					)
				)
);
print_r($respuesta);
?><table border="1"><tr><td>Nit</td><td>Razon Social</td><td>Descripcion Tipo Persona</td></tr><?php
foreach($respuesta as $datos){
	?>
    <tr>
    	<td><?php echo $datos['Nit']?></td>
        <td><?php echo $datos['NombreRazonSocial']?></td>
        <td><?php echo $datos['Cedula']?></td>
        <td><?php echo $datos['DescripcionJurisdiccion']?></td>
        <td><?php echo $datos['DireccionFiscal']?></td>
        <td><?php echo $datos['FechaInscripcion']?></td>
        <td><?php echo $datos['DescripcionEstado']?></td>
        <td><?php echo $datos['DescripcionRegimen']?></td>
        <td>
            ActividadesEconomicas
            <table border="1">
            <tr>
            <td>Descrip</td><td>Desc Tipo Persona</td><td>FechaD</td><td>FechaH</td></tr><?php
            foreach($datos['ActividadesEconomicas'] as $d){
                ?>
                <tr>
                    <td><?php echo $d['DescripcionActividad']?></td>
                    <td><?php echo $d['DescripcionTipoActividad']?></td>
                    <td><?php echo $d['FechaDesde']?></td>
                    <td><?php echo $d['FechaHasta']?></td>
                </tr>
                <?php
            }
            ?>
            </table>
        </td>
        <td>
        	ObligacionesTributarias
            <table border="1">
            <tr>
            <td>Desc</td><td>FeDesde</td><td>FeHasta</td></tr><?php
            foreach($datos['ObligacionesTributarias'] as $d){
                ?>
                <tr>
                    <td><?php echo $d['DescripcionObligacion']?></td>
                    <td><?php echo $d['FechaDesde']?></td>
                    <td><?php echo $d['FechaHasta']?></td>

                </tr>
                <?php
            }
            ?>
            </table>
        </td>
        <td>
        	PersonasContribuyente
            <table border="1">
            <tr>
            <td>Cedula</td><td>Nom Completo</td></tr><?php
            foreach($datos['PersonasContribuyente'] as $d){
                ?>
                <tr>
                    <td><?php echo $d['Cedula']?></td>
                    <td><?php echo $d['NombreCompleto']?></td>

                </tr>
                <?php
            }
            ?>
            </table>
        </td>
        <td><a href="datospadron.php?nit=<?php echo $datos['Nit']?>" target="_blank">Ver Datos</a></td>
    </tr>
    <?php
}
?>
</table>
