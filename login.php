<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro temperatura y humedad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/icon" href="./animated/favicon.png">
    <style type="text/css">.disclaimer { display: none}</style>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2? family=Inder&family=Nunito:wght@200;300&display=swap" rel="stylesheet">

    <script language="javascript" type="text/javascript">
    function limitText(limitField, limitNum) {
        if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
        }
    }
    </script>
    <style>
    body {
        background-image: url("./animated/back.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .card{
        background-color: #F9F7F7
    }
    .modal-header{
        background-color: #DBE2EF
    }
    .modal-body {
        background-color: #F9F7F7
    }
    .modal-footer {
        background-color: #DBE2EF
    }
    </style>
</head>
<body>
<nav class="navbar navbar-dark" style="background-color: #242F9B;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src=".\animated\ubo_blanco.png" alt="" width="150" height="85" class="d-inline-block">
        </a>
        <button class="navbar-toggler me-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <div class="offcanvas-header" style="background-color: #DBE2EF">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Proyecto colaboración</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active text-black" data-bs-toggle="modal" data-bs-target="#equipo">¿Quiénes somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" data-bs-toggle="modal" data-bs-target="#proyecto">Proyecto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" data-bs-toggle="modal" data-bs-target="#use">¿Qué utilizamos?</a>
            </li>
            </ul>
        </div>
        <div id="contenedor">
            <div id="box_1">
                <img id="icono-clima" src="" height="150" width="150"/>
            </div>
            <div id="box_2">
                <div id="Temp-Hum">
                    <h1 id="Temperatura-Valor"></h1>
                    <h3 id="Temperatura-Descripcion"></h3>

                    <div id="item-humedad">
                        <h3 id="label-Humedad">Humedad:&nbsp;</h3>
                        <h3 id="Humedad"> </h3>
                    </div>
                </div>
                
                <div id="Ubi-fec-hor">
                    <h3 id="Ubicacion"></h3>
                

                    <div id="fecha-hora">                        
                        <h2 id="Hora"></h2>&nbsp;&nbsp;
                        <h2 id="Fecha"></h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="offcanvas-footer" style="background-color: #DBE2EF">
            <h5 class="offcanvas-title">ㅤㅤㅤㅤEquipo programador: UwU</h5>
        </div>
        </div>
    </div>
</nav>
<!-- quienes somos -->
<div class="modal fade" id="equipo" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">¿Quiénes somos?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="fs-4 fw-bolder">Equipo UwU</p>
            <p>Somos un grupo de estudiantes ingenería en informatica de la universidad Bernardo O'higgins.</p>
            <p>El equipo esta compuesto por:</p>
            <ul>
            <li class="fw-bolder">Lider de proyecto: <ul>
                <li class="fw-normal">Angeles Guillen</li>
            </ul></li><br>
            <li class="fw-bolder">Back end: <ul>
                <li class="fw-normal">Carlos Ibarra</li>
                <li class="fw-normal">Cristóbal Acevedo</li>
                <li class="fw-normal">Jhon Yelor</li>
            </ul></li><br>
            <li class="fw-bolder">Front end: <ul>
                <li class="fw-normal">Angeles Guillen</li>
                <li class="fw-normal">Kevin Torrealba</li>
            </ul></li><br>
            </ul>
        </div>
        </div>
    </div>
</div>
<!-- Proyecto -->
<div class="modal top fade" id="proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Proyecto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="fs-4 fw-bolder">Proyecto colaboración</p>
            <p>El proyecto consiste en elaborar una pagina web que pueda mostrar los datos recolectados por un arduino creado por los estudiantes de robotica.</p>
            <p>Ademas de generar una pagina web que mostrara una tabla de resultados, como grupo creamos unas herramientas para mejorar la vista de los datos.</p><br>
            <div class="row">
            <div class="col">
                <p class="fs-5 fw-bolder">Filtrado por fecha</p>
            </div>
            </div>
            <p>Permite seleccionar una fecha de inicio y final para solo mostrar los datos dentro de los dias seleccionados</p><br>
            <div class="row">
            <div class="col">
                <p class="fs-5 fw-bolder">Filtrado por corte</p>
            </div>
            </div>
            <p>Permite seleccionar un campo a filtrar, un numero y si el dato debe ser mayor, menor o igual.</p><br>
            <div class="row">
            <div class="col">
                <p class="fs-5 fw-bolder">Resaltado de datos</p>
            </div>
            </div>
            <p>Permite seleccionar campos a resaltar, un numero, si el dato debe ser mayor, menor o igual y un color.</p><br>
        </div>
        </div>
    </div>
    </div>
    <!-- que utilizamos -->
    <div class="modal top fade" id="use" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">¿Qué utilizamos?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul>
            <li class="fw-bolder">Lenguajes utilizados: <ul>
                <li class="fw-normal">HTML5</li>
                <li class="fw-normal">PHP</li>
                <li class="fw-normal">CSS</li>
                <li class="fw-normal">Javascript</li>
            </ul></li><br>
            <li class="fw-bolder">Frameworks utilizados: <ul>
                <li class="fw-normal"><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
                <li class="fw-normal"><a href="https://datatables.net/" target="_blank">Datatables</a></li>
                <li class="fw-normal"><a href="https://ionic.io/ionicons" target="_blank">Ionicons</a></li>
            </ul></li><br>
            </ul>
        </div>
        </div>
    </div>
</div>
<!--Pagina principal-->
<div class="container">
        <div class="jumbotron" style="margin-top: 2rem !important;">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-start" style="font-size: 170%">ㅤㅤIniciar sessión</p>
                        </div>
                        <div class="col">
                            <p class="text-start" style="font-size: 170%">ㅤㅤRegistrarse</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="mb-3">
                                    <label for="userlog" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="userlog" id="userlog">
                                </div>
                                <div class="mb-3">
                                    <label for="passlog" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="passlog" id="passlog">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Ingresar</button>
                            </form>
                        </div>
                        <div class="col">
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="mb-3">
                                    <label for="usersign" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="usersign" id="usersign" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mail" class="form-label">Dirección Email</label>
                                    <input type="email" class="form-control" name="mail" id="mail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="passsign" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="passsign" id="passsign" required>
                                </div>
                                <div class="mb-3">
                                    <label for="passcon" class="form-label">Confirmar contraseña</label>
                                    <input type="password" class="form-control" name="passcon" id="passcon" required>
                                </div>
                                <button type="submit" name="signin" class="btn btn-primary">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(ISSET($_POST['login'])){
        $user = $_POST['userlog'];
        $pass = $_POST['passlog'];
        $query=mysqli_query($conn,"SELECT * FROM `usuario` WHERE user = '$user' and pass='$pass';");
        $row=mysqli_num_rows($query);
        if($row=1){
            ?><meta http-equiv="refresh" content="0;url=index.php"><?php
        }else{
            echo '<script> alert("El usuario o contraseña no son validos"); </script>';
        }
    }else if(ISSET($_POST['signin'])){
        $user = $_POST['usersign'];
        $passsign = $_POST['passsign'];
        $passcon = $_POST['passcon'];
        $email = $_POST['mail'];
        if($passsign == $passcon){
            $query=mysqli_query($conn,"INSERT INTO usuario (user,pass,mail) VALUES ('$user','$passcon','$email')");
            ?><meta http-equiv="refresh" content="0;url=index.php"><?php
        }else{
            echo '<script> alert("Las contraseñas no coinciden"); </script>';
        }
    }
}
?>
<script src="javascript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>