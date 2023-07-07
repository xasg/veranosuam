<?php
    // include_once("../templates/header.php");
    session_start();
    if (isset($_SESSION['correo']) == false) {
      echo "<script> window.location ='../index.php'; </script>";
    }
    $id = $_SESSION['id'];
    $nombre = $_SESSION['name'];
    //La siguiente consulta valida el tipo de usuario
    require("../controller/conect.php");
    $query = "SELECT * FROM usuarios WHERE id = {$id}";
    $consulta = $mysqli->query($query);
    foreach ($consulta as $value) {
      # code...
      $tp_usuario = $value['tp_user'];
    }
?>

<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Estancias Profesionales de Verano UAMC</title>
      
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="../assets/app/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/app/css/meanmenu.min.css">
      <link rel="stylesheet" href="../assets/app/css/animate.css">
      <link rel="stylesheet" href="../assets/app/css/swiper-bundle.min.css">
      <link rel="stylesheet" href="../assets/app/css/slick.css">
      <link rel="stylesheet" href="../assets/app/css/backtotop.css">
      <link rel="stylesheet" href="../assets/app/css/magnific-popup.css">
      <link rel="stylesheet" href="../assets/app/css/fontawesome-pro.css">
      <link rel="stylesheet" href="../assets/app/css/spacing.css">
      <link rel="stylesheet" href="../assets/app/css/main.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<style>
       .mi-clase-boton-confirmar {
  background-color: #007bff !important;
  border-radius: 10px !important;
  color: #FFFFFF !important;
  box-shadow: 1px 0px 8px #000 !important;
}
    </style>
   </head>
   <body>
   <?php
   //Declaracion del usuario para mostrar en el nav
   $usuario = $_SESSION['name'];
   ?>
<?php
if (isset($_REQUEST['eliminado'])) {//Esta Validación verifica que se haya eliminado una vacante correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Vacante eliminada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}
if (isset($_REQUEST['exitoso'])) {//Esta Validación verifica que se haya actualizaco una organización correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Organización actualizada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}

if (isset($_REQUEST['eliminada_organizacion'])) { //Esta Validación verifica que se haya eliminado una organización correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Organización eliminada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}
if (isset($_REQUEST['creada'])) {//Esta Validación verifica que se haya registrado una vacante correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Vacante registrada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}

?>
      <!-- Offcanvas area start -->
      <div class="fix">
         <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo">
                        <a href="../#">
                        <img src="../assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                    
                     <div class="offcanvas__close">
                        <button>
                           <i class="fal fa-times"></i>
                        </button>
                     </div>
                  </div>
                  
                  <div class="mobile-menu fix mb-40"></div>
                  <div class="offcanvas__contact mt-30 mb-20">

                     <h4>Contacto</h4>
                     <ul>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-map-marker-alt"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a target="_blank" href="https://www.google.com/maps/place/Universidad+Aut%C3%B3noma+Metropolitana+Unidad+Cuajimalpa/@19.3520841,-99.2826256,15z/data=!4m6!3m5!1s0x85d2074a4aea180d:0x1151e61121fd01f3!8m2!3d19.3520841!4d-99.2826256!16s%2Fm%2F03qdkrv" >UAMC</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="far fa-phone"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="tel:55 5814 6509"> 55 5814 6509</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="mailto:enlace.vinculacion@cua.uam.mx"><span >enlace.vinculacion@cua.uam.mx</span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas__overlay bg-ligth"></div>
      <div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->
      
      <!-- Header area start -->
      <header>
         <div id="header-sticky" class="header__area-3 header__transparent">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__logo">
                        <a href="../#">
                           <img src="../assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="menu__main-wrapper-3 d-flex justify-content-end">
                        <div class="main-menu main-menu-3 d-none d-none d-lg-block">
                           <nav id="mobile-menu">
                              <ul>
                                 
                                 <li>
                                    <a href="logout.php">Cerrar Sesión</a>
                                 </li>
                                 <li>
                                    <h5>
                                       <i> <?php echo $usuario; ?></i>
                                    </h5>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__right d-flex align-items-center justify-content-end">
                        <div class="header__btn d-none d-xl-block">
                           <a class="border__btn s-3" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/vinculacion-y-desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos">Convocatoria</a>
                        </div>
                        <div class="header__toggle d-xl-none">
                           <a class="sidebar__active" href="javascript:void(0)">
                              <div class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header area end -->
      


      <!-- Boost area start -->
      <a name="participa"></a>
<br><br><br>
      <div class="boost__area ">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-12 col-lg-12 ">
                  <div class="boost__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>ADMIN</span>ISTRA
                        </span>
                        <h2 class="section__title-2">
                           Organizaciones
                        </h2>
                     </div>

                     <div class="table-responsive-xxl">
                        <a name="" id="" class="solid__btn" href="index.php" role="button">Estudiantes</a>
                        <a name="" id="" class="solid__btn" href="#" style="background:none; color:#3887fe;" role="button">Organizaciones</a>
                        <?php 
                        // lA SIGUIENTE CONDICIÓN VALIDA SI ERES ADMINISTRADOR O SOLO USUARIO PARA ACCEDER A VER LOS USUARIOS
                           if ($tp_usuario == 2) {
                              # code...
                        ?>
                        <a name="" id="" class="solid__btn" href="usuarios.php" role="button">Usuarios</a>
                        
                        <?php
                           }
                        ?>              
                        <br><br>
                        <table class="table table-sm table-dark ">
                           <!-- Button trigger modal Agregar Organización -->
                           <button type="button" class="solid__btn" style="width:150px; font-size:14px; height: 55px; margin-bottom:20px;" data-bs-toggle="modal" data-bs-target="#modalid2">
                             Agrega una ORG
                           </button>
                           <br>
                           
                           <!-- Modal Agregar Organización -->
                           <div class="modal fade" id="modalid2" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                              <div class="modal-dialog modal-lg position-relative" role="document">
                                 <div class="modal-content ">
                                       <div class="modal-header bg-dark text-light text-center">
                                             <h5 class="modal-title bg-dark text-light text-center" id="modalTitleId">Agregar Empresa</h5>
                                                  <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                    <div class="modal-body bg-secondary text-light">
                                       <div class="container-fluid">
                                          <!--Formulario para agregar una organización-->
                                       <form  action="crear_org.php" method="post">   
                                            <div class="row justify-content-center align-items-center g-2">
                                                <div class="col-md-12">
                                                        <label for="nombre_empresa" class="form-label">Nombre</label>
                                                        <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" value="" required>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="direccion" class="form-label">Dirección</label>
                                                        <input type="text" class="form-control" id="direccion" name="direccion" value="" required>
                                                    </div>
                                                        <div class="mb-3">
                                                         <label for="estatus" class="form-label">Disponible</label>
                                                         <select class="form-select form-select-md w-50" name="estatus" id="estatus" required>
                                                            <option selected disabled>Selecciona la disponibilidad</option>
                                                            <option value="1">SI</option>
                                                            <option value="0">NO</option>
                                                         </select>
                                                        </div>
                                                      </div>
                                                   <button type="submit" class="btn solid__btn" >Registrar organización </button>
                                                </form>
                                       </div>
                                    </div>
                                    <div class="modal-footer bg-dark text-light">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                                       <!-- <button type="button" class="btn btn-primary">Save</button> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <script>
                              var modalId = document.getElementById('modalid2');
                           
                              modalId.addEventListener('show.bs.modal', function (event) {
                                   // Button that triggered the modal
                                   let button = event.relatedTarget;
                                   // Extract info from data-bs-* attributes
                                   let recipient = button.getAttribute('data-bs-whatever');
                           
                                 // Use above variables to manipulate the DOM
                              });
                           </script>
                           
                           <?php 
                              require("../controller/conect.php");

                              $query = "SELECT *,COUNT(espacio_disponible.id_organizacion) as espacios, SUM(lugares) as lugar FROM organizacion left join espacio_disponible on organizacion.id_org = espacio_disponible.id_organizacion GROUP BY organizacion.nombre ORDER BY id_org DESC, id_espacio DESC";
                              $result = $mysqli->query($query);                           
                                 # code...
                           ?>
                           <thead class="border-bottom">
                              <tr>

                                 <th scope="col">ID</th>
                                 <th scope="col">Nombre de la Organización</th>
                                 <th scope="col">Dirección</th>
                                 <th scope="col">vacantes</th>
                                 <th scope="col">Lugares</th>
                                 <th scope="col">Estatus</th>
                                 <th scope="col">Acciones</th>
                              </tr>
                           </thead>
                           
                           <?php
                           $counter = 1;
                           foreach ($result as $rows) {
                           ?>
                           <tbody class="">
                              <tr class="table-secondary">
                              
                                 <!-- <td class="text-center" id="organizacion_id" name="organizacion_id"><?php echo $rows['id_org']; ?></td> ID de la ORG en el registro de la base-->
                                 <td class="text-center"><?php echo $counter++ ?></td>
                                 <td scope="row"><?php echo $rows['nombre'] ?> </td>
                                 <td scope="row"><?php echo $rows['direccion'] ?> </td>
                                 <td scope="row"><?php echo $rows['espacios'] ?> </td>
                                 <td scope="row"><?php echo $rows['lugar'] ?> </td>
                                 <!-- <td scope="row"><?php echo $rows['dt_create'] ?> </td> Por si se necesita saber la fecha de cuando se creo -->
                                 <td scope="row"><?php if ($rows['estatus'] == 1) {
                                     # code...
                                     echo 'Disponible';}else{ echo 'No disponible';}  ?> </td>
                                
                                 <td scope="row"> <!--  Modal trigger button  -->
                                 <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modalId<?php echo $rows['id_org']; ?>">
                                   acciones
                                 </button>
                                    <?php
                                       if ($rows['espacios'] == 0) {
                                          # code...

                                    ?>
                                       <form action="eliminar_org.php" method="post">
                                       <input type="text" id="organizacion_id_eliminar" name="organizacion_id_eliminar" value="<?php echo $rows['id_org'];?>" hidden="true">          
                                       <button type="submit" class="btn btn-danger btn-md" >
                                             Eliminar
                                          </button>
                                       </form>
                                    <?php
                                       }
                                    ?>
                                 
                                 <!-- Modal Body-->
                                 <div class="modal fade" id="modalId<?php echo $rows['id_org']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId<?php echo $rows['id_org']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" >
                                       <div class="modal-content">
                                             <div class="modal-header bg-dark text-light text-center">
                                                   <h5 class="modal-title bg-dark text-light text-center" id="modalTitleId<?php echo $rows['id_org']; ?>">Registro de vacantes de la organización</h5>
                                                   <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                          <div class="modal-body bg-secondary text-light">
                                             <div class="container-fluid">
                                                <h4 class="bg-dark text-center border-bottom-0 text-light rounded">
                                                   Información de ORG : 
                                                   <i>
                                                      <?php echo $rows['nombre']; ?> <br>
                                                   </i> 
                                                </h4>
                                                <br>
                                                Realiza cambios en las vacantes de las ORS <br> <br>
                                                <?php
                                                   if ($rows['estatus'] == 1) {
                                                      # code...
                                                      $estats = 'Disponible';
                                                   }else {
                                                      # code...
                                                      $estats = 'No Disponible';
                                                   }
                                                   # code...
                                                ?>                                                         
                                                <form action="actualizar_org.php" class="row" method="post">
                                                  <input type="text"class="form-control" name="idorg" id="irorg" aria-describedby="helpId" value="<?php echo $rows['id_org'];?>" hidden="true">
                                                   <div class="col-6">
                                                     
                                                         <label for="estatus" class="row form-label col-md-4">Estatus</label>
                                                         <select class="form-select form-select-md" name="estatus" id="estatus">
                                                            <option selected disabled><?php echo $estats;?></option>
                                                            <option value="1">SI</option>
                                                            <option value="0">NO</option>
                                                         </select>
                                                   </div>

                                                   <div class="col-6">
                                                      <label for="nombre" class="form-label">Nombre de la empresa</label>
                                                        <input type="text" class="form-control border" name="nombre" id="nombre" aria-describedby="helpId" value="<?php echo $rows['nombre']; ?>">
                                                   </div>
                                                   <div class="col-6">
                                                      <label for="direccion" class="form-label">Direccion</label>
                                                        <input type="text" class="form-control border" name="direccion" id="direccion" aria-describedby="helpId" value="<?php echo $rows['direccion']; ?>">
                                                   </div>
                                                   <br>
                                                   <div class="col-4 ">
                                                      <br>
                                                      
                                                   </div>
                                                   <div class="col2">

                                                   </div>
                                                   <div class="col-6 ">
                                                      <br>
                                                      <button type="submit" class="btn btn-primary">Actualizar Datos de la Organización</button>
                                                   </div>
                                                   <br>

                                                </form>
                                                   <br>

                                                <form action="crear_espacios_org.php" class="row" method="post">

                                                <input type="text"class="form-control" name="idorg_nuevo" id="irorg_nuevo" aria-describedby="helpId" value="<?php echo $rows['id_org'];?>"  hidden="true">
                                                <div class="col-6"> 
                                                   
                                                   <label for="vacante"  class="row text-light text-center bg-dark"><b>Agregar Vacante</b></label>
                                                      <div class="mb-3">
                                                         <label for="" class="form-label">Licenciatura o Maestria</label>
                                                         <select class="form-select form-select-md" name="lic" id="lic" required>
                                                            <option selected disabled>Selecciona el Grado:</option>
                                                            <option value="Administración">Administración</option>
                                                            <option value="Biología Molecular">Biología Molecular</option>
                                                            <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                                                            <option value="Derecho">Derecho</option>
                                                            <option value="Diseño">Diseño</option>
                                                            <option value="Estudios Socioterritoriales">Estudios Socioterritoriales</option>
                                                            <option value="Humanidades">Humanidades</option>
                                                            <option value="Ingeniería Biológica">Ingeniería Biológica</option>
                                                            <option value="Ingeniería en Computación">Ingeniería en Computación</option>
                                                            <option value="Maestría en Ciencias Sociales y Humanidades">Maestría en Ciencias Sociales y Humanidades</option>
                                                            <option value="Maestría en Diseño, Información y Comunicación">Maestría en Diseño, Información y Comunicación</option>
                                                            <option value="Matemáticas Aplicadas">Matemáticas Aplicadas</option>
                                                            <option value="Tecnologías y Sistemas de Información">Tecnologías y Sistemas de Información</option>
                                                         </select>
                                                      </div>
                                                </div>
                                                
                                                <div class="col-6">
                                                   <br>
                                                   <label for="area" class="form-label">Área o Proyecto</label>
                                                     <input type="text" class="form-control border" name="area" id="area" aria-describedby="helpId" required>
                                                </div>
                                                <div class="col-6">
                                                     <div class="mb-3">
                                                        <label for="actividad" class="form-label">Actividad</label>
                                                       <textarea class="form-control" name="actividad" id="actividad" rows="3" required></textarea>
                                                     </div>
                                                   </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="modalidad" class="form-label">Modalidad Particular</label>
                                                      <select class="form-select form-select-md" name="modalidad" id="modalidad">
                                                         <option selected disabled>Selecciona</option>
                                                         <option value="Tres a uno">Tres a Uno</option>
                                                         <option value="Individual">Individual</option>
                                                         <option value="Sin especificar">Sin especificar</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="modalidad" class="form-label">Modalidad de Trabajo</label>
                                                      <select class="form-select form-select-md" name="modalidad_trabajo" id="modalidad_trabajo">
                                                         <option selected disabled>Selecciona</option>
                                                         <option value="Presencial">Presencial</option>
                                                         <option value="Híbrida">Híbrida</option>
                                                         <option value="Home Office">Home Office</option>
                                                         <option value="Sin especificar">Sin especificar</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <div class="mb-3">
                                                        <label for="" class="form-label">Apoyo</label>
                                                        <input type="text"
                                                          class="form-control" name="apoyo" id="apoyo" aria-describedby="helpId">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <div class="mb-3">
                                                        <label for="" class="form-label">Lugares</label>
                                                        <input type="number"
                                                          class="form-control" name="lugares" id="lugares" aria-describedby="helpId" required>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <div class="mb-3">
                                                        <label for="" class="form-label">Requisitos</label>
                                                        <input type="text"
                                                          class="form-control" name="requisitos" id="requisitos" aria-describedby="helpId" >
                                                      </div>
                                                   </div>
                                                </div>
                                                   <div class="col-7">
                                                   <br>   
                                                   <button type="submit" class="btn btn-primary">Agregar +</button>
                                                   
                                                   <br><br><br><br>   
                                                </div>
                                                </form>
                                                <?php
                                                $sql = "SELECT * FROM organizacion LEFT JOIN espacio_disponible on organizacion.id_org = espacio_disponible.id_organizacion where id_org ='{$rows['id_org']}'"; 
                                                $espacios = $mysqli->query($sql);
                                                $counter2 = 1;
                                                foreach ($espacios as $campos) {
                                                   # code...
                                                   
                                                ?> 
                                                <form action="actualizar_espacio_org.php" class="row" method="post">
                                                <label for="vacantes"  class="row text-light text-center bg-dark"><b>Vacantes Disponibles</b></label>
                                                 
                                                <br>
                                                <div class="border-bottom">
                                                   <!-- a -->
                                                </div>
                                                <input type="text"class="form-control" name="id_espacio" id="id_espacio" aria-describedby="helpId" value="<?php echo $campos['id_espacio'];?>" hidden="true" >
                                                <input type="text"class="form-control" name="idorg" id="idorg" aria-describedby="helpId" value="<?php echo $campos['id_organizacion'];?>"  hidden="true">
                                                <label for="vacantes"  class="row text-light text-center bg-dark">-</label>
                                                
                                                <?php
                                                   if ($campos['id_espacio'] != null || $campos['id_espacio'] != 0 ) {
                                                      # code...
                                                   
                                                ?>
                                                
                                                <div class="col-6"> 
                                                <br>
                                                
                                                      <label for="vacante"  class="row form- label col-md-4">Vacante # <?php echo $counter2; $counter2++; ?></label>

                                                         <div class="mb-3">
                                                            <label for="" class="form-label">Licenciatura o Maestria</label>
                                                            <select class="form-select form-select-md" name="lic_act" id="lic_act">
                                                               <option selected><?php echo $campos['licenciatura']; ?></option>
                                                               <option value="Administración">Administración</option>
                                                               <option value="Biología Molecular">Biología Molecular</option>
                                                               <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                                                               <option value="Derecho">Derecho</option>
                                                               <option value="Diseño">Diseño</option>
                                                               <option value="Estudios Socioterritoriales">Estudios Socioterritoriales</option>
                                                               <option value="Humanidades">Humanidades</option>
                                                               <option value="Ingeniería Biológica">Ingeniería Biológica</option>
                                                               <option value="Ingeniería en Computación">Ingeniería en Computación</option>
                                                               <option value="Maestría en Ciencias Sociales y Humanidades">Maestría en Ciencias Sociales y Humanidades</option>
                                                               <option value="Maestría en Diseño, Información y Comunicación">Maestría en Diseño, Información y Comunicación</option>
                                                               <option value="Matemáticas Aplicadas">Matemáticas Aplicadas</option>
                                                               <option value="Tecnologías y Sistemas de Información">Tecnologías y Sistemas de Información</option>
                                                            </select>
                                                         </div>
                                                   </div>
                                                   
                                                   <div class="col-6">
                                                      <br><br>
                                                      <label for="area" class="form-label">Area o Proyecto</label>
                                                        <input type="text" class="form-control border" name="area_act" id="area_act" aria-describedby="helpId" value="<?php echo $campos['area_proyecto']; ?>" >
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                        <label for="actividad" class="form-label">Actividad</label>
                                                       <textarea class="form-control" name="actividad_act" id="actividad_act" rows="3"><?php echo $campos['actividad']; ?></textarea>
                                                     </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="modalidad" class="form-label">Modalidad Particular</label>
                                                         <select class="form-select form-select-md" name="modalidad_act" id="modalidad_act">
                                                            <option selected disabled><?php echo $campos['modalidad_part']; ?></option>
                                                            <option value="Tres a uno">Tres a Uno</option>
                                                            <option value="Individual">Individual</option>
                                                            <option value="Sin especificar">Sin especificar</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="modalidad" class="form-label">Modalidad de Trabajo</label>
                                                         <select class="form-select form-select-md" name="modalidad_trabajo_act" id="modalidad_trabajo_act">
                                                            <option selected disabled><?php echo $campos['modalidad_trabajo']; ?></option>
                                                            <option value="Presencial">Presencial</option>
                                                            <option value="Híbrida">Híbrida</option>
                                                            <option value="Home Office">Home Office</option>
                                                            <option value="Sin especificar">Sin especificar</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <div class="mb-3">
                                                           <label for="" class="form-label">Apoyo</label>
                                                           <input type="text"
                                                             class="form-control" name="apoyo_act" id="apoyo_act" aria-describedby="helpId" value="<?php echo $campos['apoyo']; ?>">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <div class="mb-3">
                                                           <label for="" class="form-label">Lugares</label>
                                                           <input type="number"
                                                             class="form-control" name="lugares_act" id="lugares_act" aria-describedby="helpId" value="<?php echo $campos['lugares']; ?>">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <div class="mb-3">
                                                           <label for="" class="form-label">Requisitos</label>
                                                           <input type="text"
                                                             class="form-control" name="requisitos_act" id="requisitos_act" aria-describedby="helpId" value="<?php echo $campos['requisitos']; ?>">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-7">
                                                      <br>   
                                                      <button type= "submit" class="btn btn-danger" name="accion" value="Eliminar">Eliminar</button>
                                                      <button type="submit" class="btn btn-primary" name="accion" value="actualizar">Actualizar</button> 
                                                     <?php  
                                                } 
                                                  ?>    
                                                   </div>
                                                   <br><br>
                                                </form>

                                                <?php                                                
                                             }
                                                ?>
                                             </div>
                                          </div>
                                          <div class="modal-footer bg-dark text-light">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                  </td>
                              </tr>
                
                           </tbody>

                           <?php
                           }
                           ?>
                        </table>
                        <br><br><br>
                     </div>
                     <div class="col-md-12 text-center">
                     <ul class="pagination pagination-lg pager" id="developer_page"></ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 ">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        <!-- <img src="../assets/img/boost/boost-01.png" alt="image not found"> -->
                        
                        <div class="boost__shape-1"></div>
                     </div>
                     <div class="boost__shape-2">
                        <svg id="Group_27289" data-name="Group 27289" xmlns="http://www.w3.org/2000/svg" width="25.594" height="19.655" viewBox="0 0 25.594 19.655">
                           <!-- <path id="Path_26014" data-name="Path 26014" d="M321.713,46.082l-25.594,3.962,0,.008.163,1.6a23.645,23.645,0,0,0,7.662,14.089Z" transform="translate(-296.119 -46.082)" fill="#f8d458"/> -->
                         </svg>                         
                     </div>
                     <div class="boost__shape-3"></div>
                     <div class="boost__shape-4">
                         </svg>
                     </div>
                     <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                        <br>
                        
                     </div>
                     
                     
                  </div>
               </div>
            </div>
            
            
            
            <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">Registro de usuario con rol de ADMIN</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form  action="../includes/crear_responsable.php" method="post">   
                                            <div class="row justify-content-center align-items-center g-2">
                                                
                                            
                                                    <div class="col-md-12">
                                                        <label for="nombres" class="form-label">Nombre(s)</label>
                                                        <input type="text" class="form-control" id="nombres" name="nombres" value="" required>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="correo" class="form-label">Correo</label>
                                                        <input type="email" class="form-control" id="correo" name="correo" value="" required>
                                                        <div id="result-username"></div> 
                                                      </div>
                                                    <div class="col-md-12">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="" required>
                                                        <!-- <div id="result-username"></div>  -->
                                                      </div>
                                                   <button type="submit" class="btn solid__btn" >Registrar usuario </button>
                                                </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar pestaña</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
                     </div>
                  </div>
            </div>
            </div>
         </div>
      </div>
      <!-- Boost area end -->


      <!-- Footer area start -->
      <footer>
         <section class="footer__border footer-bg grey__bg p-relative z-index-11 pt-120 pb-60">
            <div class="footer__shape">
               <img src="../assets/img/shape/footer-shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <div class="footer__widget mb-55">
                        <div class="footer__logo mb-20">
                           <a href="index.html">
                              <img src="../assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="footer__copyright grey-bg-2">
            <div class="container">
               <div class="copyright__inner-2">
                  <div class="copyright__text text-center">
                     <p>©2023 UAMC</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer area end -->

      </main>
      <!-- Body main wrapper end -->

      <!-- Back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
         
      </div>
      <!-- Back to top end -->

      <!-- JS here -->
      <script src="../assets/app/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="../assets/app/js/vendor/waypoints.min.js"></script>
      <script src="../assets/app/js/bootstrap.min.js"></script>
      <script src="../assets/app/js/meanmenu.min.js"></script>
      <script src="../assets/app/js/swiper-bundle.min.js"></script>
      <script src="../assets/app/js/slick.min.js"></script>
      <script src="../assets/app/js/magnific-popup.min.js"></script>
      <script src="../assets/app/js/backtotop.js"></script>
      <script src="../assets/app/js/counterup.js"></script>
      <script src="../assets/app/js/wow.min.js"></script>
      <script src="../assets/app/js/imagesloaded.pkgd.min.js"></script>
      <script src="../assets/app/js/isotope.pkgd.min.js"></script>
      <script src="../assets/app/js/ajax-form.js"></script>
      <script src="../assets/app/js/main.js"></script>
   </body>
</html>