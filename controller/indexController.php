<?php 

   require_once("model/viewModel.php");

       $obj = new viewPeople();

        $view=$obj->GetViewPer();


    require_once("view/index.phtml");
 
 ?>