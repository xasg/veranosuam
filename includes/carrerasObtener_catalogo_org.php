<?php
	require('../controller/conect.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_carrera = $_POST['id_carrera'];
	// $queryM = "SELECT cat_ies.id_ies, cat_ies.dt_nombre_ies  FROM `rel_ies_programa` LEFT JOIN cat_ies ON(cat_ies.id_ies=rel_ies_programa.id_ies) WHERE `id_cat_entidad` LIKE '$id_entidad' GROUP BY `id_ies`";
	$queryM  = "SELECT * FROM cat_carrera where id_rel_grado_carrera = $id_carrera";
    $resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='' selected disabled>Selecciona tu carrera</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		// $html.= "<option value='".$rowM['id_ies']."'  > ".$rowM['dt_nombre_ies']."</option>";
		$html.= "<option value='".$rowM['id_carrera']."'  > ".$rowM['nombre']."</option>";
		// $html.= " <option value='".$rowM['id_carrera']."'>".$rowM['nombre']."</option>";
        
    }
	
	echo $html;
?>