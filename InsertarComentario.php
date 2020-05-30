<?php
$con_usuario="root";
$con_contra="";
$con_bd="biblioteca";
$con_equipo="localhost";
$c=mysqli_connect($con_equipo, $con_usuario, $con_contra, $con_bd);
if(!$c){
    echo"No se pudo conectar a la bd";
}
else{
    
}

$sql="insert into Comentarios(Nombre, Correo, Comentario) values ('{$_POST['nombre']}', '{$_POST['correo']}', '{$_POST['comentario']}')";
$count = 0;
	if(mysqli_query($c, $sql))
        {
            echo "Se han insertado los datos satisfactoriamente";
             header('Location:https://localhost/Programas/Biblioteca Virtual/Central.php');
        }
        else
        {
	    echo "Error: ".$sql . '<br>' . mysqli_error($c);
        }
		
?>