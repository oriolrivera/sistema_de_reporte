<?php

  session_start();



 class Conectar
    {

         public function con(){


              
		       $con=mysql_connect("localhost","user","password");

		       mysql_query("SET NAMES 'utf8'");

		       mysql_select_db("sistema_data");

            

		       return $con;

         }



         public static function ruta(){


           return "http://localhost/sistema-data/";
           


         }

         public function comillas_inteligentes($valor)
         {
            // Retirar las barras
            if (get_magic_quotes_gpc()) {
                $valor = stripslashes($valor);
            }

            // Colocar comillas si no es entero
            if (!is_numeric($valor)) {
                $valor = "'" . mysql_real_escape_string($valor) . "'";
            }
            return $valor;
         }


    }



 ?>