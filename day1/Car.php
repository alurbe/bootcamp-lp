 <?php

     Class Car extends Vehiculo
	 {
				 //Atributos
				          				

				//Metodos
   				public function notfly()
				{
					 $this->fly = False;
					 echo " It can not Fly " , ",";
				}
					 public function velocidad( $load_speed)
		 {

					$this->velocidad = $load_speed;
					echo "<br/> Car: Speed: ". $load_speed;
					echo ','; ' <br />';
				 }

				public function maxpassengers($load_passengers)
				{

					$this->maxpassengers = $load_passengers;
					echo " Max Passengers: ". $load_passengers; '<br />';
	 }
	 }

	 ?>
