<?php

  require_once("model/trabajoModel.php");

    $obj = new trabajo();

   $view=$obj->GetPersona();



    require_once("view/index.phtml");


 ?>