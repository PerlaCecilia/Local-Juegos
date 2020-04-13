<?php
  //Mando a llamar el archivo que contiene la conexion con la BD
  include_once "../controladores/conexion.php";

  // Vista de la tabla para usuario normal
  $getNormalTorneo = $BD -> query("SELECT id_torneo, nombre, juego, fecha, hora, modalidad, forma, max_jugadores, descripcion, estatus FROM torneo");
  $resultadoNormalTorneo = $getNormalTorneo -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalTorneo == null || empty($resultadoNormalTorneo)){
    // Mensaje de alerta
  }

  $getNormalJuego = $BD -> query("SELECT id_juego, imagen, nombre FROM juego");
  $resultadoNormalJuego = $getNormalJuego -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalJuego == null || empty($resultadoNormalJuego)){
    // Mensaje de alerta
  }

  $getNormalConsola = $BD -> query("SELECT id_consola, id_plataforma, numero, serial, nombre FROM consola");
  $resultadoNormalConsola = $getNormalConsola -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalConsola == null || empty($resultadoNormalConsola)){
    // Mensaje de alerta
  }

  $getAdminInstalado = $BD -> query("SELECT id_instalado, id_juego, id_consola FROM instalado");
  $resultadoAdminInstalado = $getAdminInstalado -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminInstalado == null || empty($resultadoAdminInstalado)){
    // Mensaje de alerta
  }

  $getAdminRenta = $BD -> query("SELECT id_renta, fecha, hora, id_gamer, id_accesorio, id_instalado, juego, consola FROM renta");
  $resultadoAdminRenta = $getAdminRenta -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminRenta == null || empty($resultadoAdminRenta)){
    // Mensaje de alerta
  }

  $getAdminAccesorio = $BD -> query("SELECT id_accesorio, nombre FROM accesorio");
  $resultadoAdminAccesorio = $getAdminAccesorio -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminAccesorio == null || empty($resultadoAdminAccesorio)){
    // Mensaje de alerta
  }

  $getAdminPremio = $BD -> query("SELECT id_premio, premio FROM premio");
  $resultadoAdminPremio = $getAdminPremio -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminPremio == null || empty($resultadoAdminPremio)){
    // Mensaje de alerta
  }

  // Detalles

  $getAdminForma = $BD -> query("SELECT id_forma, tipo FROM forma");
  $resultadoAdminForma = $getAdminForma -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminForma == null || empty($resultadoAdminForma)){
    // Mensaje de alerta
  }

  $getAdminMod = $BD -> query("SELECT id_modalidad, tipo FROM modalidad");
  $resultadoAdminMod = $getAdminMod -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminMod == null || empty($resultadoAdminMod)){
    // Mensaje de alerta
  }

  $getAdminEsta = $BD -> query("SELECT id_estatus, tipo FROM estatus");
  $resultadoAdminEsta = $getAdminEsta -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminEsta == null || empty($resultadoAdminEsta)){
    // Mensaje de alerta
  }

  // Fin Detalles

  $getAdminGamer = $BD -> query("SELECT id_gamer, nombre, apellido, fecha_nac, genero, telefono, email, gamertag, foto, id_redsocial, contra FROM gamers");
  $resultadoAdminGamer = $getAdminGamer -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminGamer == null || empty($resultadoAdminGamer)){
    // Mensaje de alerta
  }
  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultadoNormalJuego -> imagen ).'"/>';
  //<img src="data:image/jpeg;base64,'.base64_encode($resultadoAdminGamer -> foto).'">

?>
