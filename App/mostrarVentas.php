<?php
include ("../Conexion/cn.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet"/>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Pimienta</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white" style="background: #68B0AB !important;box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.25);">
    <div class="container">
        <a class="navbar-brand" href="#">Inicio</a>
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
                    <a class="nav-link active" href="#">
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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarVenta" style="background: #68B0AB !important;">
            Agregar
            <span>
                <svg style="margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="currentColor"></path></svg>
            </span>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="agregarVenta" tabindex="-1" aria-labelledby="agregarVentaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="../Accion/crearVenta.php" method="POST">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarVentaLabel">Agregar venta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="cantidad">Cantidad</label>
                            <div class="input-group">
                                <input type="text" id="cantidad" name="cantidad" class="form-control" />
                                <div class="input-group-text">$</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tipoPago">Tipo de Pago</label>
                            <input type="text" id="tipoPago" name="tipoPago" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="total">Total</label>
                            <input type="text" id="total" name="total" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="hora">Hora</label>
                            <input type="time" id="hora" name="hora" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-success table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Tipo de pago</th>
            <th scope="col">Total</th>
            <th scope="col">Hora</th>
            <th scope="col">Fecha</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $query = 'select Id_Venta, Fecha, Hora, Cantidad, Tipo_Pago, Total from Venta';

        $result = $conexion->query($query);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) : ?>
            <tr <?php echo $row['Id_Venta'] ?> >
                <td><?php echo $row['Id_Venta'] ?></td>
                <td><?php echo $row['Tipo_Pago'] ?></td>
                <td><?php echo $row['Cantidad'] ?></td>
                <td><?php echo $row['Total'] ?></td>
                <td><?php echo $row['Hora'] ?></td>
                <td><?php echo $row['Fecha'] ?></td>
            </tr>
<?php endwhile; ?>
        </tbody>
    </table>
</div>
<script src="../assets/js/mdb.min.js"></script>
</body>
</html>
