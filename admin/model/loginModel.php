<?php


class Login extends Conectar
      {


        public function UserLogin(){

            if (empty($_POST["userLogin"]) or empty($_POST["passUser"])) {

            	 header("Location:".Conectar::ruta()."?accion=login&m=1");

               exit;
            }//end if


            parent::con();

            $sql=sprintf(

                  "SELECT id_login_data,login_dat,password_data FROM login_data WHERE login_dat=%s AND password_data=%s",

                  parent::comillas_inteligentes($_POST["userLogin"]),parent::comillas_inteligentes($_POST["passUser"])


            );//end sprintf



            $res=mysql_query($sql);

            if (mysql_num_rows($res)==0) {

            	header("Location:".Conectar::ruta()."?accion=login&m=2");


            }else{
            	if ($reg=mysql_fetch_assoc($res)) {

            		$_SESSION["id_session"]=$reg["id_login_data"];
            		header("Location:".Conectar::ruta()."?accion=index");

            	}


                }



        }//end metodo UserLogin



              public function cerrarSessionAdmin(){

                   unset($_SESSION['id_session']);
                   header("Location:".Conectar::ruta()."?accion=login&m=3");

              }


      }//end class Login












 ?>