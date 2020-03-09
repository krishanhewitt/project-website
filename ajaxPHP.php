<?php
  $c[] ="Alfa Romeo";
  $c[] ="Aston Martin";
  $c[] ="Audi";
  $c[] ="Bentley";
  $c[] ="BMW";
  $c[] ="Bugatti";
  $c[] ="Cadillac";
  $c[] ="Chevrolet";
  $c[] ="Chrysler";
  $c[] ="Citroën";
  $c[] ="Dodge";
  $c[] ="Ferrari";
  $c[] ="Fiat";
  $c[] ="Fisker";
  $c[] ="Ford";
  $c[] ="Honda";
  $c[] ="Hummer";
  $c[] ="Hyundai";
  $c[] ="Infiniti";
  $c[] ="Jaguar";
  $c[] ="Jeep";
  $c[] ="Kia";
  $c[] ="KTM";
  $c[] ="Lada";
  $c[] ="Lamborghini";
  $c[] ="Lancia";
  $c[] ="Land Rover";
  $c[] ="Landwind";
  $c[] ="Lexus";
  $c[] ="Lotus";
  $c[] ="Maserati";
  $c[] ="Maybach";
  $c[] ="Mazda";
  $c[] ="McLaren";
  $c[] ="Mercedes-Benz";
  $c[] ="MG";
  $c[] ="Mini";
  $c[] ="Mitsubishi";
  $c[] ="Nissan";
  $c[] ="Opel";
  $c[] ="Peugeot";
  $c[] ="Porsche";
  $c[] ="Renault";
  $c[] ="Rolls-Royce";
  $c[] ="Rover";
  $c[] ="Saab";
  $c[] ="Skoda";
  $c[] ="Smart";
  $c[] ="Subaru";
  $c[] ="Suzuki";
  $c[] ="Tesla";
  $c[] ="Toyota";
  $c[] ="Volkswagen";
  $c[] ="Volvo";
  
	$q = $_REQUEST["q"];

	$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($c as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>