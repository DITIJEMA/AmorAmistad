<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","14faa");
$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
 if($filas){
    header("location:inicio.html");
 }else{
    ?>
    <?php
    include("loggin.php");
    ?>
    <h1 class="bad">ERROR  EN LOS DATOS</h1>
    <?php
 }
 mysqli_free_result($resultado);
 mysqli_close($conexion);
