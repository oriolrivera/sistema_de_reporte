<?php


    class viewPeople extends Conectar
          {

              public function __construct()
				   	{

				      $this->viewP=array();
				      $this->viewEdit=array();
				      $this->viewRepor=array();



				   	}//end construct



				   	public function GetViewPer(){

				       parent::con();

				       $sql=sprintf(

				             "SELECT id_persona,nombre,nacionalidad,observacion,foto,estado,fecha,cedula_pasaporte FROM persona"
				       	);

				       $res=mysql_query($sql);

				       while ($reg=mysql_fetch_assoc($res)) {

				       	      $this->viewP[]=$reg;

				       }

				           return $this->viewP;



				   	}//end GetPersona



			   	public function GetView($id){


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


                            public function GetRepor(){


			        parent::con();

			        $sql="SELECT * FROM persona;";

			        $res=mysql_query($sql);

			          if ($res) {

			        while ($reg=mysql_fetch_assoc($res)) {

			            $this->viewRepor[]=$reg;

			        }




			          return $this->viewRepor;


			          }



			   	}//end GetViewEdit






          }//end class




 ?>
