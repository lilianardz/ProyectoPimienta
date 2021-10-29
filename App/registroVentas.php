
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de ventas</title>
<?php
include("../Layout/estilos.php");

?>
</body>
<br>
<h1 class="align-content-center">Registro de ventas</h1>
<form>
 <div class="form-group">

    <div class="form-group">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <br>
                    <label>Fecha</label>
                    <input class="form-control" type="date" id="fecha" name="txtFecha">
                    <br>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <br>
                        <label>Hora</label>
                        <input class="form-control" type="time" id="hora" name="txtHora">
                        <br>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <br>
                        <label>Cantidad</label>
                        <input class="form-control" type="text" id="cantidad" name="txtCantidad">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <br>
                        <label>Total</label>
                        <input class="form-control" type="text" id="total" name="txtTotal">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

   <div class="col-6">
       <br>
    <div class="form-group">
        <div class="container">
            <div class="row">
               <div class="col-4">
                   <label>Tipo de pago</label>
                   <div>
                       <input class="form-control" type="radio" id="tipoEfectivo" name="txtTipoEfectivo">
                       <label for="tipoEfectivo">Efectivo</label>
                   </div>
                   <div>
                       <input class="form-control" type="radio" id="tipoTarjeta" name="txtTipoTarjeta">
                       <label for="tipoTarjeta">Tarjeta</label>
                   </div>
               </div>
            </div>
        </div>
    </div>
   </div>

</form>
</html>