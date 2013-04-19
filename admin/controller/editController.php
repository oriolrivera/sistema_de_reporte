<?php


  require_once("model/trabajoModel.php");
  require_once("lib/class.inputfilter.php");

    $obj = new trabajo();
    $clear = new InputFilter();



 if (!isset($_GET["data"]) or !isset($_GET["en"])) {
	 header("Location:".Conectar::ruta()."?accion=index");
	 exit;
}else{

	$view=$obj->GetViewEdit($_GET["data"]);



	  if (!$_GET["data"]==$view) {
	  	header("Location:".Conectar::ruta()."?accion=index01");

	 exit;
	  }

 if (isset($_POST["g"]) and $_POST["g"]=="s") {
 	$_POST = $clear->process($_POST);
 	$edit= $obj->GetEdit();
 }



 }

 require_once("view/edit.phtml");


 ?>