<?php
    include("../../config/conexion2.php");
    $id = $_POST['variable'];
    
    /*echo "<script type='text/javascript'>
            alert('$id.aaa.$nuevo');
    </script>";*/   
    
    $query = "DELETE from publicaciones WHERE id=$id";
    $resultado = $conexion->query($query);

    if($resultado){
        echo "Si se eliminó";
        header("Location:../../paginas/paginas_usuarios/perfil_usuario.php");
    }else{
        echo "No se eliminó"; 
        header("Location:../../paginas/paginas_usuarios/perfil_usuario.php");
    }
    mysqli_close($conexion);
?>
