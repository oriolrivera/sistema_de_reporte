<?php

    require_once("model/trabajoModel.php");
    require_once("lib/class.inputfilter.php");

    $obj = new trabajo();

    $clear = new InputFilter();


if (isset($_POST["g"]) and $_POST["g"]=="s") {

        $_POST = $clear->process($_POST);
	    $obj->GetInsertG();



}



 ?>