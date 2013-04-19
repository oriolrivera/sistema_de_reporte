<?php

 require_once("model/loginModel.php");


  if (isset($_SESSION["id_session"])) {

    	    header("Location:".conectar::ruta()."?accion=index");
   }

$obj = new Login();

if (isset($_POST["g"]) and $_POST["g"]=="s") {

	$obj->UserLogin();
}



 require_once("view/login.phtml");


 ?>