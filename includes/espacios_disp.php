<?php
	require('../controller/conect.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_carrera = $_POST['id_carrera'];
	// $queryM = "SELECT cat_ies.id_ies, cat_ies.dt_nombre_ies  FROM `rel_ies_programa` LEFT JOIN cat_ies ON(cat_ies.id_ies=rel_ies_programa.id_ies) WHERE `id_cat_entidad` LIKE '$id_entidad' GROUP BY `id_ies`";
	$queryM  = "SELECT * FROM `espacio_disponible` LEFT JOIN organizacion on espacio_disponible.id_organizacion = organizacion.id_org where id_dt_carrera = $id_carrera";
    $resultadoM = $mysqli->query($queryM);
	
	// $html= "<option value='' selected disabled></option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		// $html.= "<option value='".$rowM['id_ies']."'  > ".$rowM['dt_nombre_ies']."</option>";
		// $html.= "<option value='".$rowM['id_carrera']."'  > ".$rowM['nombre']."</option>";
		// $html.= " <option value='".$rowM['id_carrera']."'>".$rowM['nombre']."</option>";

        ?>

<div  class="bd-faq__accordion" data-aos="fade-left" data-aos-duration="1000">
                                 <div class="accordion" id="accordionExample">
                                 <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingOne<?php echo $rowM['id_espacio']; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne<?php echo $rowM['id_espacio']; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $rowM['id_espacio']; ?>">
                                       <?php echo /*$rowM['id_organizacion'].' '.*/$rowM['nombre'];   ?> 
                                    </button>
                                 </h2>
                                 <div id="collapseOne<?php echo $rowM['id_espacio']; ?>" class="accordion-collapse collapse collapse"
                                    aria-labelledby="headingOne<?php echo $rowM['id_espacio']; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <table class="table table-striped">
                                          <tr>
                                             <th>Licenciatura</th>
                                             <th>Proyecto</th>
                                             <th>Actividades</th>
                                             <th>Espacios</th>
                                          </tr>
                                          <tr>
                                             <td><?php echo $rowM['licenciatura']; ?></td>
                                             <td><?php echo $rowM['area_proyecto']; ?></td>
                                             <td><?php echo $rowM['actividad']; ?></td>
                                             <td><?php echo $rowM['lugares']; ?></td>
                                           </tr>
                                           
                                       </table>
                                    </div>
                                 </div>
                                 </div>
                                 </div>
                              </div>

<?php    
    }
	// echo $html;
?>