<?php
include ("../Conexion/cn.php");
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet"/>
    <link href="../assets/css/estilos.css" rel="stylesheet"/>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sweetalert2@11.js"></script>
    <title>Pimienta</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white" style="background: #68B0AB !important;box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.25);">
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6m0 5h18v2H3v-2m0 5h18v2H3v-2z" fill="currentColor"></path></svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item d-flex">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66l.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z" fill="currentColor"></path></svg>
                        Captacion y secado
                    </a>
                </li>
                <li class="nav-item d-flex">
                    <a class="nav-link active" href="mostrarVentas.php">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M2 17h20v4H2v-4M6.25 7H9V6H6V3h8v3h-3v1h6.8c1 0 2 1 2.2 2l.5 7h-17l.55-7c0-1 1-2 2.2-2M13 9v2h5V9h-5M6 9v1h2V9H6m3 0v1h2V9H9m-3 2v1h2v-1H6m3 0v1h2v-1H9m-3 2v1h2v-1H6m3 0v1h2v-1H9M7 4v1h6V4H7z" fill="currentColor"></path></svg>
                        Venta
                    </a>
                </li>
                <li class="nav-item d-flex">
                    <a class="nav-link active" href="cerrarSesion.php">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 5h6c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h6c.55 0 1-.45 1-1s-.45-1-1-1H5V5z" fill="currentColor"></path><path d="M20.65 11.65l-2.79-2.79a.501.501 0 0 0-.86.35V11h-7c-.55 0-1 .45-1 1s.45 1 1 1h7v1.79c0 .45.54.67.85.35l2.79-2.79c.2-.19.2-.51.01-.7z" fill="currentColor"></path></svg>
                        Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->
<div class="container mt-5">
    <div class="d-flex justify-content-end mb-5">
        <button type="button" class="btn btn-primary" id="agregarBoton" style="background: #68B0AB !important;">
            Agregar
            <span>
                <svg style="margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="currentColor"></path></svg>
            </span>
        </button>
    </div>
    <table class="table table-success table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo de pago</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
                <th scope="col" class="justify-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $query = 'select Id_Venta, Fecha, Cantidad, Tipo_Pago, Total from Venta';

        $result = $conexion->query($query);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) : ?>
            <tr <?php echo $row['Id_Venta'] ?> >
                <td><?php echo $row['Id_Venta'] ?></td>
                <td><?php echo $row['Tipo_Pago'] ?></td>
                <td><?php echo $row['Cantidad'] ?></td>
                <td><?php echo $row['Total'] ?></td>
                <td><?php echo $row['Fecha'] ?></td>
                <td class="justify-center">
                    <button type="button" data-id="<?php echo $row['Id_Venta'] ?>" class="btn btn-light shadow-0 botonEditar" data-bs-toggle="modala" data-bs-target="#actualizarVenta" style="background: transparent !important;">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="17" height="17" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7H5V5h7V3H5m12.78 1a.69.69 0 0 0-.48.2l-1.22 1.21l2.5 2.5L19.8 6.7c.26-.26.26-.7 0-.95L18.25 4.2c-.13-.13-.3-.2-.47-.2m-2.41 2.12L8 13.5V16h2.5l7.37-7.38l-2.5-2.5z" fill="currentColor"></path></svg>
                        </span>
                    </button>
                    <button type="button" data-id="<?php echo $row['Id_Venta'] ?>" data-fecha="<?php echo $row['Fecha'] ?>" class="btn btn-light shadow-0 botonBorrar" style="background: transparent !important;">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="17" height="17" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12m2.46-7.12l1.41-1.41L12 12.59l2.12-2.12l1.41 1.41L13.41 14l2.12 2.12l-1.41 1.41L12 15.41l-2.12 2.12l-1.41-1.41L10.59 14l-2.13-2.12M15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="currentColor"></path></svg>
                        </span>
                    </button>
                </td>
            </tr>
    <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script src="../assets/js/mdb.min.js"></script>
<?php 
include('../Accion/modalVenta.php')
?>
<script>
    const modal = new bootstrap.Modal(document.querySelector('#modalVenta'), {})
    const titulo = document.querySelector("#modalVentaTitulo")
    
    function editarModal() {
        titulo.innerText = 'Editar Venta'
        modal.toggle()
    }

    function agregarModal(){
        const titulo = document.querySelector("#modalVentaTitulo")
        titulo.innerText = 'Agregar Venta'
        modal.toggle()
    }
    
    function borrarVenta(evento) {
        window.evento = evento
        Swal.fire({
            title: '¿Desea borrar la venta?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Venta eliminada', '', 'success')
            }
        })
    }

    // Para los botones de editar
    document.querySelectorAll('.botonEditar').forEach(boton => {
        boton.addEventListener('click', editarModal)
    })
    // Para el boton de agregar
    document.getElementById('agregarBoton').addEventListener('click', agregarModal)

    // Para los botones de borrar
    document.querySelectorAll('.botonBorrar').forEach(boton => {
        boton.addEventListener('click', borrarVenta)
    })
</script>

</body>
</html>
