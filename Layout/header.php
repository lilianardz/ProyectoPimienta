<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Principal.php">Página principal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="ITST">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php
          $Id_Rol=$_SESSION['Id_Rol'];
          if($Id_Rol==1){
            echo "perfilContratador.php";
          }else{
            echo "perfilTrabajador.php";
          }
        ?>">Mi perfil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrarSesion.php">Cerrar sesión </a>
      </li>
    </ul>
  </div>
</nav>