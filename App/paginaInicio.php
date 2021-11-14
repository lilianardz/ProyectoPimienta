<?php
include("../Conexion/cn.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet"/>
    <link href="../Layout/icons.css" rel="stylesheet"/>
    <title>Inicio</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white"
     style="background: #68B0AB !important;box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.25);">
    <div class="container">
        <a class="navbar-brand" href="paginaInicio.php">Inicio</a>
        <div class="flex-grow-1"></div>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                 role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet"
                 viewBox="0 0 24 24">
                <path d="M3 6h18v2H3V6m0 5h18v2H3v-2m0 5h18v2H3v-2z" fill="currentColor"></path>
            </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item d-flex">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32"
                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path
                                d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66l.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"
                                fill="currentColor"></path>
                        </svg>
                        Captacion y secado
                    </a>
                </li>
                <li class="nav-item d-flex">
                    <a class="nav-link active" href="mostrarVentas.php ">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32"
                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path
                                d="M2 17h20v4H2v-4M6.25 7H9V6H6V3h8v3h-3v1h6.8c1 0 2 1 2.2 2l.5 7h-17l.55-7c0-1 1-2 2.2-2M13 9v2h5V9h-5M6 9v1h2V9H6m3 0v1h2V9H9m-3 2v1h2v-1H6m3 0v1h2v-1H9m-3 2v1h2v-1H6m3 0v1h2v-1H9M7 4v1h6V4H7z"
                                fill="currentColor"></path>
                        </svg>
                        Venta
                    </a>
                </li>
                <li class="nav-item d-flex">
                    <a class="nav-link active" href="cerrarSesion.php">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             aria-hidden="true" role="img" class="iconify iconify--ic" width="32" height="32"
                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path
                                d="M5 5h6c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h6c.55 0 1-.45 1-1s-.45-1-1-1H5V5z"
                                fill="currentColor"></path>
                            <path
                                d="M20.65 11.65l-2.79-2.79a.501.501 0 0 0-.86.35V11h-7c-.55 0-1 .45-1 1s.45 1 1 1h7v1.79c0 .45.54.67.85.35l2.79-2.79c.2-.19.2-.51.01-.7z"
                                fill="currentColor"></path>
                        </svg>
                        Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>
<div class="center ">
<h2>Bienvenido, ¿A dónde desea ir?</h2>
</div>
    <br>
<div class="container">
    <div class="item-0">
        <img src="../icons/icaptacion.png">
        <div class="form-group">
            <div class="text-center">
                <br>
                <a href=#><input type="button" value="Captación y secado" class="btn btn-light"></a>
            </div>
        </div>
    </div>
<form>
    <div class="item-1">
        <img src="../icons/iventa.png">
        <div class="form-group">
            <div class="text-center">
                <br>
                <a href="mostrarVentas.php"><input type="button" value="Ventas" class="btn btn-light"></a>
            </div>
        </div>
    </div>
</div>
</form>


<script src="assets/js/mdb.min.js"></script>
</body>
</html>