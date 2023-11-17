<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["id"] == null) {
    print "<script>alert(\"Acceso invalido!\");window.location='../../components/inicioSesion/sesion.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../../favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos Asignados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="../../Layouts/NavbarYPestaña/pestaña.css">
    <link rel="stylesheet" href="../../Layouts/CardTrabajoEvaluadoAprobado/trabajoAprobado.css">
    <link rel="stylesheet" href="../../Layouts/CardTrabajoEvaluadoRechazado/trabajoRechazado.css">
    <link rel="stylesheet" href="../../Layouts/CardTrabajoPendientePorEvaluar/trabajoPendienteEvaluar.css">

</head>

<body>
    <header>
        <?php
        require_once('../../Layouts/nav.php');
        ?>
    </header>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-1 d-sm-block background-lateral">
                <?php
                require_once('../../Layouts/sidebar.php');
                ?>

            </div>
            <div class="col-xl-9 col-lg-9 col-md-11 col-sm-12">
                <div class="container">
                    <h2 class="mt-5 mb-3">Extensos Finales</h2>
                    <!-------------------------CONTAINER QUE SE MUESTRA CUANDO EL USUARIO TIENE REGISTROS---------->
                    <?php
                    /*Restriccion de la fecha de evaluacion de resumen
                require "../../modelo/fechasEvaluacionResumenes.php";*/
                    /*if(mysqli_num_rows($resFechaEvaluacionResumen)>0){*/
                    require "../../modelo/extensosFinalesAsignados.php";
                    if (mysqli_num_rows($resExtensosFinalesAsignados) > 0) {

                    ?>
                        <section>
                            <?php
                            require_once('../../Layouts/NavbarYPestaña/navbarYPestañaEvaluador.php');
                            ?>
                        </section>
                        <div class="row">
                            <div class=""></div>
                            <?php
                            require_once('../../Layouts/CardExtensoEvaluadoAprobado/cardExtensoEvaluadoAprobado.php');
                            require_once('../../Layouts/CardExtensoPendientePorEvaluar/cardExtensoPendientePorEvaluar.php');
                            require_once('../../Layouts/CardExtensoEvaluadoRechazado/cardExtensoEvaluadoRechazado.php');
                            ?>

                        </div>

                        <!----------------------------------------------------------------------------------------------->
                    <?php
                    } else {
                    ?>
                        <!--------------ESTE CONTENEDOR SE MUESTRA CUANDO EL USUARIO NO TIENE PONENCIAS ASIGNADAS--------->
                        <div class=" containerSinR " id="containerSinR">
                            <span class="texto-trabajo mb-3">Ve tus asignaciones del Congreso</span>
                            <h1 class="mt-5">Aún no tienes evaluaciones asignadas<br> del Congreso actual</h1>
                        </div>
                        <div class="container-fluid p-5 mt-5 mb-5 d-none d-md-block"></div>
                        <div class="container-fluid p-5 mt-5 mb-5"></div>
                    <?php
                    }
                    //}                                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class=" d-sm-block d-md-none">
        <footer>
            <?php
            require_once('../../Layouts/footer.php');
            ?>
        </footer>

    </div>
    <script src="extensosAsignados.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c7b1d2a865.js" crossorigin="anonymous"></script>
</body>

</html>