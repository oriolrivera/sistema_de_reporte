<?php


   require_once("model/viewModel.php");

    $obj = new viewPeople();



 if (!isset($_GET["data"]) or !isset($_GET["en"])) {
	 header("Location:".Conectar::ruta()."?accion=index");
}else{

	$view=$obj->GetView($_GET["data"]);

	 if (!$_GET["data"]==$view) {
	 	header("Location:".Conectar::ruta()."?accion=index");

		exit;
	 }





 }

 require_once("view/view.phtml");




 ?>