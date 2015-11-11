<?php
 
 Class Vehiculo 
	 {
		 
		 //Atributos
		 public  $speed;
		 public  $canFly;
		 public $maxpassengers;
		 		
				//Metodos

		 public function velocidad( $load_speed)
		 { 
		 }
				 
				 public function fly()
				 {
					$this->fly = true;
					echo " It can Fly " , ",";
				 }
			
                 public function notfly()
				 {
					 $this->canFly = False;
					 echo " It can Not Fly " , ",";
				 }
			 
				public function maxpassengers($load_passengers)
				{ 
				}
	 }



?>