<?php


   class trabajo extends Conectar
   {
    public function __construct(){

      $this->viewPers=array();
      $this->viewEdit=array();

   }//end construct



   public function GetPersona(){

       parent::con();
       $sql=sprintf(
             "SELECT id_persona,nombre,nacionalidad,observacion,foto,estado,fecha FROM persona"
             );

       $res=mysql_query($sql);
       while ($reg=mysql_fetch_assoc($res)) {
       	      $this->viewPers[]=$reg;
       }
              return $this->viewPers;
              
   	}//end GetPersona


   	public function GetInsert(){ 

         if (empty($_POST["nom_ape"]) or empty($_POST["estado"]))
	      {
		
             	header("Location:".Conectar::ruta()."?accion=add-data&m=1");
             	exit;

              }
              
                  $fotJpg=str_replace(".png", ".jpg", $_FILES["foto_per"]["name"]);
                  $extImg = pathinfo($fotJpg);
                  $ext = array( "jpeg","png","jpg","JPG");				  

                         	//insert
                         	parent::con();
				$sql=sprintf(
		                        "INSERT INTO persona
				         (`id_persona`,
				         `nombre`,
				         `apellido`,
				         `tel_contact`,
				         `nacionalidad`,
				         `fecha_nacimiento`,
				         `cedula_pasaporte`, 
				         `observacion`, 
				         `estado`,
				         `fecha`, 
				         `responsable`, 
				         `tel1`, `tel2`)
				         values(null,%s,%s,%s,%s,%s,%s,%s,%s,now(),%s,%s,%s)",
					 parent::comillas_inteligentes($_POST["nom_ape"]),
			                 parent::comillas_inteligentes($_POST["ape_ape"]),
					 parent::comillas_inteligentes($_POST["tel_con"]),
			                 parent::comillas_inteligentes($_POST["nac"]),
			                 parent::comillas_inteligentes($_POST["fec_nac"]),
			                 parent::comillas_inteligentes($_POST["ced_pas"]),
					 parent::comillas_inteligentes($_POST["obser"]),
					 parent::comillas_inteligentes($_POST["estado"]),                                                        
			                 parent::comillas_inteligentes($_POST["respons"]),
				         parent::comillas_inteligentes($_POST["tel_res1"]),
				         parent::comillas_inteligentes($_POST["tel_res2"]));

				         mysql_query($sql);

				              //*******************

				              //subir foto
				         $id=mysql_insert_id();

                                         if (!empty($_FILES["foto_per"]["name"])) {
                                                if (array_search($extImg["extension"], $ext)){

				                       $nomp=str_replace(' ', '-',$_POST["nom_ape"]);

				                       copy($_FILES["foto_per"]["tmp_name"], '../public/foto/'.$_FILES["foto_per"]["name"]);
                                                       
                                                       $foto=$nomp."-".$id.".jpg";

			                               include("lib/resize-class.php");
			                               $resizeObj = new resize('../public/foto/'.$_FILES["foto_per"]["name"]);
          					       $resizeObj -> resizeImage(200, 200, 0);
          					       $resizeObj -> saveImage('../public/foto/'.$foto, 100);
          					       unlink('../public/foto/'.$_FILES["foto_per"]["name"]);

  					           //modificamos el registro creado
  					               $updade=sprintf(
  					                  "UPDATE persona
  					                   SET
  					                   foto=%s
  					                   WHERE
  					                   id_persona=%s",
  					                   parent::comillas_inteligentes($foto),
  					                   parent::comillas_inteligentes($id)
  					                 );
  					                   mysql_query($updade);

  					                  header("Location:".Conectar::ruta()."?accion=edit&data=".base64_encode($id)."&en=".md5('dsfsdfdsfdsfds')."&m=4");


                                                           exit;

                                                     }
                                    
                                               }
                                                  header("Location:".Conectar::ruta()."?accion=edit&data=".base64_encode($id)."&en=".md5('dsfsdfdsfdsfds')."&m=4");

                                   
                                   



          	}//end GetInsert


    //*********************************************************************

      public function GetInsertG(){
       //print_r($_POST);


               if (empty($_POST["nom_ape"]) or empty($_POST["estado"]))


                {

                      header("Location:".Conectar::ruta()."?accion=add-data&m=1");
                      exit;

                }


            


                $fotJpg=str_replace(".png", ".jpg", $_FILES["foto_per"]["name"]);


                                $extImg = pathinfo($fotJpg);


                                $ext = array( "jpeg","png","jpg","JPG");


            

                          //insert

                          parent::con();

                      $sql=sprintf(

                           "INSERT INTO persona
                            (`id_persona`, `nombre`, `apellido`, `tel_contact`, `nacionalidad`, `fecha_nacimiento`, `cedula_pasaporte`, `observacion`,  `estado`, `fecha`, `responsable`, `tel1`, `tel2`)
                                values(
                                null,
                                %s,
                                %s,
                                %s,
                                %s,
                                %s,
                                %s,
                                %s,
                                %s,
                                now(),
                                %s,
                                %s,                               
                                %s

                                )",

                            parent::comillas_inteligentes($_POST["nom_ape"]),
                            parent::comillas_inteligentes($_POST["ape_ape"]),
                            parent::comillas_inteligentes($_POST["tel_con"]),
                            parent::comillas_inteligentes($_POST["nac"]),
                            parent::comillas_inteligentes($_POST["fec_nac"]),
                            parent::comillas_inteligentes($_POST["ced_pas"]),
                            parent::comillas_inteligentes($_POST["obser"]),
                            parent::comillas_inteligentes($_POST["estado"]),                                                        
                            parent::comillas_inteligentes($_POST["respons"]),
                            parent::comillas_inteligentes($_POST["tel_res1"]),
                            parent::comillas_inteligentes($_POST["tel_res2"])


                        );

                      mysql_query($sql);

                      //*******************

                      //subir foto
                     $id=mysql_insert_id();

                        if (!empty($_FILES["foto_per"]["name"])) {
                            if (array_search($extImg["extension"], $ext))
                                   {



                      $nomp=str_replace(' ', '-',$_POST["nom_ape"]);


                     



                      copy($_FILES["foto_per"]["tmp_name"], '../public/foto/'.$_FILES["foto_per"]["name"]);
                              $foto=$nomp."-".$id.".jpg";








                              include("lib/resize-class.php");
                              $resizeObj = new resize('../public/foto/'.$_FILES["foto_per"]["name"]);
                              $resizeObj -> resizeImage(200, 200, 0);
                              $resizeObj -> saveImage('../public/foto/'.$foto, 100);
                              unlink('../public/foto/'.$_FILES["foto_per"]["name"]);

                               //modificamos el registro creado
                                $updade=sprintf(
                                    "UPDATE persona
                                    SET
                                    foto=%s
                                    WHERE
                                    id_persona=%s",
                                    parent::comillas_inteligentes($foto),
                                    parent::comillas_inteligentes($id)
                                );
                                  mysql_query($updade);

                                         header("Location:".Conectar::ruta()."?accion=add-data&m=4");


                                        exit;

                                        }
                                    
                                      }
                                      header("Location:".Conectar::ruta()."?accion=add-data&m=4");

                                   
                                   



    }//end GetInsertG


    //*********************************************************************



   	public function GetViewEdit($id){


        parent::con();

        $sql="SELECT * FROM persona WHERE id_persona=".base64_decode($id);

        $res=mysql_query($sql);

          if ($res) {

        while ($reg=mysql_fetch_assoc($res)) {

            $this->viewEdit[]=$reg;

        }




          return $this->viewEdit;


          }



   	}//end GetViewEdit


   	public function GetEdit(){

           $getId=$_GET["data"];



              if (empty($_POST["nom_ape"]) or empty($_POST["estado"]))


                {


                  header("Location:".Conectar::ruta()."?accion=edit&data=".$getId."&en=".md5('dsfsdfdsfdsfds')."&m=1");
                 	exit;

                }




								$fotJpg=str_replace(".png", ".jpg", $_FILES["foto_per"]["name"]);


                                $extImg = pathinfo($fotJpg);


                                $ext = array( "jpeg","png","jpg","JPG");


					 //

                         	//insert

                         	parent::con();

				              $sql=sprintf(

				              	"UPDATE `persona` SET
				              	        `nombre` = %s,
                                `apellido` = %s,
                                `tel_contact` = %s,
                                `nacionalidad` = %s,
                                `fecha_nacimiento` = %s,
                                `cedula_pasaporte` = %s,
                                `observacion` = %s,
                                `estado` = %s,
                                `responsable` = %s,
                                `tel1` = %s,
                                `tel2` = %s
                                 WHERE `id_persona` =%s",



                            parent::comillas_inteligentes($_POST["nom_ape"]),
                            parent::comillas_inteligentes($_POST["ape_ape"]),
                            parent::comillas_inteligentes($_POST["tel_con"]),
                            parent::comillas_inteligentes($_POST["nac"]),
                            parent::comillas_inteligentes($_POST["fec_nac"]),
                            parent::comillas_inteligentes($_POST["ced_pas"]),
                            parent::comillas_inteligentes($_POST["obser"]),
                            parent::comillas_inteligentes($_POST["estado"]),
                            parent::comillas_inteligentes($_POST["respons"]),                                     
                            parent::comillas_inteligentes($_POST["tel_res1"]),
                            parent::comillas_inteligentes($_POST["tel_res2"]),

				                    parent::comillas_inteligentes(base64_decode($getId))



				              	);
				              //echo $sql;

				              mysql_query($sql);

				              //*******************

				              //subir foto
				              if (!empty($_FILES["foto_per"]["name"])) {

				              	if (array_search($extImg["extension"], $ext))
                                   {

				              $nomp=str_replace(' ', '-',$_POST["nom_ape"]);





				              copy($_FILES["foto_per"]["tmp_name"], '../public/foto/'.$_FILES["foto_per"]["name"]);
                              $foto=$nomp."-".base64_decode($getId).".jpg";

                              include("lib/resize-class.php");
                              $resizeObj = new resize('../public/foto/'.$_FILES["foto_per"]["name"]);
					          $resizeObj -> resizeImage(200, 200, 0);
					          $resizeObj -> saveImage('../public/foto/'.$foto, 100);
					          unlink('../public/foto/'.$_FILES["foto_per"]["name"]);

					           //modificamos el registro creado
					            $updade=sprintf(
					                "UPDATE persona
					                SET
					                foto=%s
					                WHERE
					                id_persona=%s",
					                parent::comillas_inteligentes($foto),
					                parent::comillas_inteligentes(base64_decode($getId))
					            );
					              mysql_query($updade);
                        header("Location:".Conectar::ruta()."?accion=edit&data=".$getId."&en=".md5('dsfsdfdsfdsfds')."&m=4");



                        exit;

					             }

                         }

                         header("Location:".Conectar::ruta()."?accion=edit&data=".$getId."&en=".md5('dsfsdfdsfdsfds')."&m=4");





   	}//end GetEdit



              public function delete()
                             {



                              if (empty($_POST["delete"])) {
                                header("Location: ".Conectar::ruta()."?accion=index&m=1");exit;

                              }





                              $dele=$_POST["delete"];

                                             $ids = implode(",",$dele);

                                             $query='SELECT * FROM persona WHERE id_persona IN ('.implode(",",$dele).')';






                                          $resul=mysql_query($query,parent::con());

                                           while ($reg=mysql_fetch_array($resul)) {

                                                   unlink('../public/foto/'.$reg["foto"]);
                                             }

                                             $sql = 'DELETE FROM persona WHERE id_persona IN ('.implode(",",$dele).')';

                                             mysql_query($sql,parent::con());



                                              header("Location: ".Conectar::ruta()."?accion=index&m=2");



                             }//end delete









   }//end class




 ?>
