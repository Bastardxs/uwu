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
<?php require'mail.php';?>
<!--navbar-->
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
          <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-success me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#fecha">Mostrar</button>
            </div>
          </div>
        </div>
        <p>Permite seleccionar una fecha de inicio y final para solo mostrar los datos dentro de los dias seleccionados</p><br>
        <div class="row">
          <div class="col">
            <p class="fs-5 fw-bolder">Filtrado por corte</p>
          </div>
          <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-success me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#corte">Mostrar</button>
            </div>
          </div>
        </div>
        <p>Permite seleccionar un campo a filtrar, un numero y si el dato debe ser mayor, menor o igual.</p><br>
        <div class="row">
          <div class="col">
            <p class="fs-5 fw-bolder">Resaltado de datos</p>
          </div>
          <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-success me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#res">Mostrar</button>
            </div>
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
<!-- Fecha -->
<div class="modal fade" id="fecha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mb-3">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Filtrar por fecha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-inline" method="POST" action="">
      <div class="modal-body">
            <label>Fecha Desde:</label>
            <input type="date" class="form-control" placeholder="Start" required name="date1"/>
            <label>Hasta</label>
            <input type="date" class="form-control" placeholder="End" required name="date2"/>
      </div>
      <div class="modal-footer" style="background-color: #DBE2EF">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      <button class="btn btn-info text-white" name="search">Filtrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Punto de corte -->
<div class="modal fade" id="corte" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mb-3">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Punto de corte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-inline" method="POST" action="">
      <div class="modal-body">
        <div class="mb-3">
        <label class="form-label">Campo a filtrar:</label>
            <div class="btn-group d-grid gap-2 d-md-flex justify-content-md-end" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="rcampo" id="rtemp" value="rtemp" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="rtemp">Temperatura</label>

                <input type="radio" class="btn-check" name="rcampo" id="rhum" value="rhum" autocomplete="off">
                <label class="btn btn-outline-primary" for="rhum">Humedad</label>
            </div>
        </div>
        <div class="mb-3">
        <label class="form-label">Numero:</label>
        <input type="number" class="form-control" required name="ncorte" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);">
        </div>
        <div class="mb-3">
        <label class="form-label">Corte:</label>
            <div class="btn-group d-grid gap-2 d-md-flex justify-content-md-end" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="rcorte" id="rmenor" value="rmenor" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="rmenor"><</label>

                <input type="radio" class="btn-check" name="rcorte" id="rigual" value="rigual" autocomplete="off">
                <label class="btn btn-outline-primary" for="rigual">=</label>

                <input type="radio" class="btn-check" name="rcorte" id="rmayor" value="rmayor" autocomplete="off">
                <label class="btn btn-outline-primary" for="rmayor">></label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-info text-white" name="corte">Filtrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- resaltar -->
<div class="modal fade" id="res" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mb-3">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Resaltar valores</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-inline" method="POST" action="">
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="ctem" name="ctem">
          <label class="form-check-label" for="flexCheckDefault">Temperatura</label>
        </div>
        <div class="col">
        <input class="form-check-input" type="checkbox" value="on" id="chum" name="chum">
          <label class="form-check-label" for="flexCheckDefault">Humedad</label>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Numero:</label>
          <input type="number" step=0.01 class="form-control" id="ntres" required name="ntres" disabled="disabled" onKeyDown="limitText(this,2);" onKeyUp="limitText(this,2);">
        </div>
        <div class="col">
          <label class="form-label">Numero:</label>
          <input type="number" step=0.01 class="form-control" id="nhres" required name="nhres" disabled="disabled" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
        <select class="form-select" aria-label="Default select example" id="stem" name="stem" disabled="disabled">
          <option selected value="smenor"><</option>
          <option value="sigual">=</option>
          <option value="smayor">></option>
        </select>
        </div>
        <div class="col">
        <select class="form-select" aria-label="Default select example" id="shum" name="shum" disabled="disabled">
          <option selected value="smenor"><</option>
          <option value="sigual">=</option>
          <option value="smayor">></option>
        </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="exampleColorInput" class="form-label">Escoga un color:</label>
          <input type="color" class="form-control form-control-color" id="tcolor" name="tcolor" value="#ff6961" title="Escoger un color" disabled="disabled">
        </div>
        <div class="col">
          <label for="exampleColorInput" class="form-label">Escoga un color:</label>
          <input type="color" class="form-control form-control-color" id="hcolor" name="hcolor" value="#84b6f4" title="Escoger un color" disabled="disabled">
        </div>
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-info text-white" name="res">Resaltar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- mmtemp -->
<div class="modal fade" id="mmtemp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content mb-3">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Maximo y minimo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-inline" method="POST" action="">
      <div class="modal-body">
      <div class="row mb-3">
        <a>Campo: </a>
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="cmtem" name="cmtem" required="required">
          <label class="form-check-label" for="flexCheckDefault">Temperatura</label>
        </div>
        <div class="col">
        <input class="form-check-input" type="checkbox" value="on" id="cmhum" name="cmhum" required="required">
          <label class="form-check-label" for="flexCheckDefault">Humedad</label>
        </div>
      </div>
      <div class="row mb">
        <a>Mostrar: </a>
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="cmaxtem" name="cmaxtem" disabled="disabled" required="required">
          <label class="form-check-label" for="flexCheckDefault">Máxima</label>
        </div>
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="cmaxhum" name="cmaxhum" disabled="disabled" required="required">
          <label class="form-check-label" for="flexCheckDefault">Máxima</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="cmintem" name="cmintem" disabled="disabled" required="required">
          <label class="form-check-label" for="flexCheckDefault">Mínima</label>
        </div>
        <div class="col">
        <input class="form-check-input" type="checkbox" value="on" id="cminhum" name="cminhum" disabled="disabled" required="required">
        <label class="form-check-label" for="flexCheckDefault">Mínima</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="prtem" name="prtem" disabled="disabled" required="required">
          <label class="form-check-label" for="flexCheckDefault">Promedio</label>
        </div>
        <div class="col">
          <input class="form-check-input" type="checkbox" value="on" id="prhum" name="prhum" disabled="disabled" required="required">
          <label class="form-check-label" for="flexCheckDefault">Promedio</label>
        </div>
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-info text-white" name="mm">Filtrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Pagina principal -->
    <div class="container">
        <div class="jumbotron" style="margin-top: 2rem !important;">
            <div class="card mb-3">
                <div class="row align-items-start" style="margin-top: 0.9rem !important;">
                    <div class="col" style="margin-right: -20px">
                    <p class="text-start" style="font-size: 170%">ㅤㅤRegistros de temperatura y humedad</p>
                    </div>
                    <div class="col dropdown d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="" method="post">
                          <button type="submit" name="refresh" class="btn btn-warning">
                            <span class="button__icon text-white fs-4">
                              <ion-icon name="sync"></ion-icon>
                            </span>
                          </button>
                        </form>
                        <button class="btn btn-info dropdown-toggle me-md-5 text-white fs-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fecha">Fecha</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#corte">Punto de corte</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#res">Resaltar</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mmtemp">Máximo y Mínimo</a></li>
                    </div>
                </div>       
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <table id="example" class="table table-striped">
                    <thead>
                        <?php include'range.php'?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="javascript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
$(document).ready(function () {
    var table = $('#example').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json',
        },
        searching: false,
        order: [[0, 'desc']],
    });
});
</script>
<script type="text/javascript">
    $(function () {
        $("#ctem").click(function () {
            if ($(this).is(":checked")) {
                $("#ntres").removeAttr("disabled");
                $("#stem").removeAttr("disabled");
                $("#tcolor").removeAttr("disabled");
                $("#chum").removeAttr("required");
            } else {
                $("#ntres").attr("disabled", "disabled");
                $("#stem").attr("disabled", "disabled");
                $("#tcolor").attr("disabled", "disabled");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#chum").click(function () {
            if ($(this).is(":checked")) {
                $("#nhres").removeAttr("disabled");
                $("#shum").removeAttr("disabled");
                $("#hcolor").removeAttr("disabled");
                $("#ctem").removeAttr("required");
            } else {
                $("#nhres").attr("disabled", "disabled");
                $("#shum").attr("disabled", "disabled");
                $("#hcolor").attr("disabled", "disabled");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cmtem").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxtem").removeAttr("disabled");
                $("#cmintem").removeAttr("disabled");
                $("#prtem").removeAttr("disabled");
                $("#cmhum").removeAttr("required");
            } else {
                $("#cmaxtem").attr("disabled", "disabled");
                $("#cmintem").attr("disabled", "disabled");
                $("#prtem").attr("disabled", "disabled");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cmhum").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxhum").removeAttr("disabled");
                $("#cminhum").removeAttr("disabled");
                $("#prhum").removeAttr("disabled");
                $("#cmtem").removeAttr("required");
            } else {
                $("#cmaxhum").attr("disabled", "disabled");
                $("#cminhum").attr("disabled", "disabled");
                $("#prhum").attr("disabled", "disabled");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cmaxtem").click(function () {
            if ($(this).is(":checked")) {
                $("#cmintem").removeAttr("required");
                $("#prtem").removeAttr("required");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cmintem").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxtem").removeAttr("required");
                $("#prtem").removeAttr("required");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cmaxhum").click(function () {
            if ($(this).is(":checked")) {
                $("#cminhum").removeAttr("required");
                $("#prhum").removeAttr("required");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#cminhum").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxhum").removeAttr("required");
                $("#prhum").removeAttr("required");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#prtem").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxtem").removeAttr("required");
                $("#cmintem").removeAttr("required");
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#prhum").click(function () {
            if ($(this).is(":checked")) {
                $("#cmaxhum").removeAttr("required");
                $("#cminhum").removeAttr("required");
            }
        });
    });
</script>
</body>
</html>