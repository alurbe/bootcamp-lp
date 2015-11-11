<!--html>
<head>
<title>Form</title>

</head>
<body-->

<?php


include("Plane2.php");
include("Bike2.php");
include("Car2.php");

$pas = $new_pas = $x = $max = "";

if (isset($_POST ["submit"]))
  {
  $pas= $_POST['pas'];
  $new_pas = filter_var($pas, FILTER_SANITIZE_STRING);
  $var= $_POST['var'];
  //$pas is now number of passengers load.

    switch ($var) {

  case '1':
  $x= new Plane();
  $max= $x->maxPassengers();
  if ($new_pas<=($max)){
                    echo "You can travel now";

}
else {
      $name= $x->getName();
      echo "You can not travel on a ".$name." whit ".$new_pas." passengers. The number of allowed passengers for the selected transport is ".$max;

}

  break;

  case '2':
  $x= new Car();
  $max=($x->maxPassengers());
  if ($new_pas<=($max)){
                    echo "You can travel now";

}
else {
      $name= ($x->getName());
      echo "You can not travel on a " .$name. "whit" .$new_pas. "passengers. The number of alllowed passengers for the selected transport is" .$max;

}
  break;

  case '3':
  $x= new Bike();
  $max= $x->maxPassengers();
  if ($new_pas<=($max)){
                    echo "You can travel now";

}
else {
      $name= ($x->getName());
      echo "You can not travel on a " .$name. "whit" .$new_pas. "passengers. The number of alllowed passengers for the selected transport is" .$max;

}
  break;
}



}
  ?>

 <!--/body>
</html-->
