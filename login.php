<?php 

include("conex.inc");
session_start();  
header("Cache-control: private");
  
  $username = $_POST['username'];
  $password = $_POST['password']; 
  //$passwordEncrypt = md5($password,PASSWORD_DEFAULT);
  $query = "SELECT * FROM clientes WHERE Correo='$username' AND Clave='$password'";
  
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == true) {
    
    $_SESSION['usuario'] = $username;
    $_SESSION['estado'] = "logeado";
    
    header("Location: principal_c_l.html");
}
else {
     echo "error de usuario o clave";
  
header("Location: inicia_sesion.html");
}

  ?>


