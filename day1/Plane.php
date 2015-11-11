 <?php
 Class Plane extends Vehiculo
	 {

		     



				 //Metodos

				 public function fly()
				 {
            $this->fly = true;
            echo " It can Fly" , ",";
				 }

				 public function velocidad( $load_speed)
		 {

					$this->velocidad = $load_speed;
					echo "Plane: Speed: ". $load_speed;
					echo ','; ' <br />';
				 }

				public function maxpassengers($load_passengers)
				{

					$this->maxpassengers = $load_passengers;
					echo " Max Passengers: ". $load_passengers; '<br />';
	 }
	 }

	 ?>
