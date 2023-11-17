<?php
    /** 
    * Este modulo realiza la consulta de todos los Carteles de todos los congresos
    * Cualquier duda o sugerencia:
    * @author Carlos Tejeda tejeda.araujo.carlos.alfredo@gmail.com
    **/ 
    require "conexion.php";

    $tituloPonencia="";
    $idPonencia="";
    $idTipoPonencia="";
    $categoriaPonencia="";
    $idUsuarioEvalua="";

    //Hace la consulta de los trabajos disponibles en el congreso actual para autor
    $consCartelesHistorico = "SELECT * FROM ponencia
    INNER JOIN cartel ON ponencia.id_ponencia=cartel.id_ponencia
    INNER JOIN categoria ON ponencia.id_categoria=categoria.id_categoria
    INNER JOIN tipo_ponencia ON ponencia.id_tipo_ponencia=tipo_ponencia.id_tipo_ponencia
    WHERE ponencia.id_tipo_ponencia='1'
    ORDER BY ponencia.id_ponencia;";
    $resCartelesHistorico = mysqli_query($conexion, $consCartelesHistorico);

?>