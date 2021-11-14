<?php
    session_start();
    include ("../Conexion/cn.php");

    if(isset($_POST['txtUsuario'])){

        $nombre = $_POST['txtUsuario'];
        $pwd = $_POST['txtPwd'];

        $cmd=$conexion->prepare("select * from Usuario where Nombre=? and Pwd=?");
        $cmd->bind_param("ss",$nombre,$pwd);
        $cmd->execute();
        $cmd->store_result();
        $cmd->bind_result($Id_Usuario,$nombre,$pwd,$Id_Rol);
        $cmd->fetch();

        if($cmd->num_rows>0){
            $_SESSION['Usuario'] = $nombre;
            $_SESSION['Id_Usuario']=$Id_Usuario;
            $_SESSION['Id_Rol']=$Id_Rol;
            header("Location: paginaInicio.php");
        }else{
            header("location: Login.php?status=400");
        }
}

?>