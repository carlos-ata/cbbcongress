<?php
require "conexion.php";
require "traerCongresoActual.php";

    /** 
    *******************************************************************************************************
    * Consulta las ponencias registradas al momento como autor
    *******************************************************************************************************
    **/
    //Todas las ponencias hasta el momento
    $consPonenciasRegistradas = "SELECT count(*) from ponencia where id_usuario_registra='$_SESSION[id]' AND id_congreso='$idCongreso'";
    $resPonenciasRegistradas = mysqli_query($conexion, $consPonenciasRegistradas);
    $fetchPonenciasRegistradas = mysqli_fetch_assoc($resPonenciasRegistradas);
    $numeroDePonenciasRegistradas=$fetchPonenciasRegistradas['count(*)'];     
    //Carteles
    $consNumeroCartelesRegistrados = "SELECT count(*) from ponencia where id_usuario_registra='$_SESSION[id]' AND id_congreso='$idCongreso' AND id_tipo_ponencia='1'";
    $rescNumeroCartelesRegistrados = mysqli_query($conexion, $consNumeroCartelesRegistrados);
    $fetchNumeroCartelesRegistrados = mysqli_fetch_assoc($rescNumeroCartelesRegistrados);
    $numeroCartelesRegistrados=$fetchNumeroCartelesRegistrados['count(*)'];     
    //Ponencias
    $consNumeroPonenciasRegistradas = "SELECT count(*) from ponencia where id_usuario_registra='$_SESSION[id]' AND id_congreso='$idCongreso' AND id_tipo_ponencia='2'";
    $rescNumeroPonenciasRegistradas = mysqli_query($conexion, $consNumeroPonenciasRegistradas);
    $fetchNumeroPonenciasRegistradas = mysqli_fetch_assoc($rescNumeroPonenciasRegistradas);
    $numeroPonenciasRegistradas=$fetchNumeroPonenciasRegistradas['count(*)']; 
    //Talleres
    $consNumeroTalleresRegistrados = "SELECT count(*) from ponencia where id_usuario_registra='$_SESSION[id]' AND id_congreso='$idCongreso' AND id_tipo_ponencia='3'";
    $rescNumeroTalleresRegistrados = mysqli_query($conexion, $consNumeroTalleresRegistrados);
    $fetchNumeroTalleresRegistrados = mysqli_fetch_assoc($rescNumeroTalleresRegistrados);
    $numeroTalleresRegistrados=$fetchNumeroTalleresRegistrados['count(*)']; 
    //Prototipo
    $consNumeroPrototiposRegistrados = "SELECT count(*) from ponencia where id_usuario_registra='$_SESSION[id]' AND id_congreso='$idCongreso' AND id_tipo_ponencia='4'";
    $rescNumeroPrototiposRegistrados = mysqli_query($conexion, $consNumeroPrototiposRegistrados);
    $fetchNumeroPrototiposRegistrados = mysqli_fetch_assoc($rescNumeroPrototiposRegistrados);
    $numeroPrototiposRegistrados=$fetchNumeroPrototiposRegistrados['count(*)']; 
    /** 
    *******************************************************************************************************
    *******************************************************************************************************
    **/
    /** 
    *******************************************************************************************************
    * Consulta las ponencias registradas hasta el momento como coautor 
    *******************************************************************************************************
    **/
    // 
    //Todas las ponencias hasta el momento de coautor
    $consPonenciasRegistradasCoautor = "SELECT count(*) FROM usuario_colabora_ponencia
    INNER JOIN ponencia ON usuario_colabora_ponencia.id_ponencia=ponencia.id_ponencia
    WHERE usuario_colabora_ponencia.id_usuario='$_SESSION[id]' AND id_congreso='$idCongreso'";
    $resPonenciasRegistradasCoautor = mysqli_query($conexion, $consPonenciasRegistradasCoautor);
    $fetchPonenciasRegistradasCoautor = mysqli_fetch_assoc($resPonenciasRegistradasCoautor);
    $numeroDePonenciasRegistradasCoautor=$fetchPonenciasRegistradasCoautor['count(*)']; 
    //Carteles
    $consNumeroCartelesRegistradosCoautor = "SELECT count(*) FROM usuario_colabora_ponencia
    INNER JOIN ponencia ON usuario_colabora_ponencia.id_ponencia=ponencia.id_ponencia
    WHERE usuario_colabora_ponencia.id_usuario='$_SESSION[id]' AND id_congreso='$idCongreso' AND ponencia.id_tipo_ponencia='1'";
    $rescNumeroCartelesRegistradosCoautor = mysqli_query($conexion, $consNumeroCartelesRegistradosCoautor);
    $fetchNumeroCartelesRegistradosCoautor = mysqli_fetch_assoc($rescNumeroCartelesRegistradosCoautor);
    $numeroCartelesRegistradosCoautor=$fetchNumeroCartelesRegistradosCoautor['count(*)']; 
    //Ponencias
    $consNumeroPonenciasRegistradasCoautor = "SELECT count(*) FROM usuario_colabora_ponencia
    INNER JOIN ponencia ON usuario_colabora_ponencia.id_ponencia=ponencia.id_ponencia
    WHERE usuario_colabora_ponencia.id_usuario='$_SESSION[id]' AND id_congreso='$idCongreso' AND ponencia.id_tipo_ponencia='2'";
    $rescNumeroPonenciasRegistradasCoautor = mysqli_query($conexion, $consNumeroPonenciasRegistradasCoautor);
    $fetchNumeroPonenciasRegistradasCoautor = mysqli_fetch_assoc($rescNumeroPonenciasRegistradasCoautor);
    $numeroPonenciasRegistradasCoautor=$fetchNumeroPonenciasRegistradasCoautor['count(*)'];
    //Talleres
    $consNumeroTalleresRegistradosCoautor = "SELECT count(*) FROM usuario_colabora_ponencia
    INNER JOIN ponencia ON usuario_colabora_ponencia.id_ponencia=ponencia.id_ponencia
    WHERE usuario_colabora_ponencia.id_usuario='$_SESSION[id]' AND id_congreso='$idCongreso' AND ponencia.id_tipo_ponencia='3'";
    $rescNumeroTalleresRegistradosCoautor = mysqli_query($conexion, $consNumeroTalleresRegistradosCoautor);
    $fetchNumeroTalleresRegistradosCoautor = mysqli_fetch_assoc($rescNumeroTalleresRegistradosCoautor);
    $numeroTalleresRegistradosCoautor=$fetchNumeroTalleresRegistradosCoautor['count(*)'];
    //Prototipo
    $consNumeroPrototiposRegistradosCoautor = "SELECT count(*) FROM usuario_colabora_ponencia
    INNER JOIN ponencia ON usuario_colabora_ponencia.id_ponencia=ponencia.id_ponencia
    WHERE usuario_colabora_ponencia.id_usuario='$_SESSION[id]' AND id_congreso='$idCongreso' AND ponencia.id_tipo_ponencia='3'";
    $rescNumeroPrototiposRegistradosCoautor = mysqli_query($conexion, $consNumeroPrototiposRegistradosCoautor);
    $fetchNumeroPrototiposRegistradosCoautor = mysqli_fetch_assoc($rescNumeroPrototiposRegistradosCoautor);
    $numeroPrototiposRegistradosCoautor=$fetchNumeroPrototiposRegistradosCoautor['count(*)'];
    /** 
    *******************************************************************************************************
    *******************************************************************************************************
    **/ 

?>