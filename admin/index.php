<?php


 require_once("lib/config.php");


 if (isset($_SESSION["id_session"])) {

 if (!empty($_GET["accion"])) {

 	 $accion = $_GET["accion"];

 }else{

      $accion = "login";

 }

    if (is_file("controller/".$accion."Controller.php")) {

    	    require_once("controller/".$accion."Controller.php");
    }else{

    	require_once("controller/errorController.php");
    }

 }else{
       require_once("controller/loginController.php");
   }




 ?>