<?php
    //echo '<pre>';
   //die (print_r($_POST));
    
   $firstName = $_POST["firstName"];
   $surName = $_POST["surName"];
   $address = $_POST["address"];
   $dob = $_POST["dob"];
   //die (print_r($dob));
   $explodedString = explode('-', $dob);
   $year = $explodedString[0];
   $month = $explodedString[1];
   $day = $explodedString[2];

    //die (print_r($explodedString));

    $newDob = $day.'-'.$month.'-'.$year;
    	 
	$bday = new DateTime($newDob);
		 
	$dateToday = date('d-m-Y');
			
	$age = $bday->diff(new DateTime);
    //echo '<pre>';
    //die(var_dump($age));
		 
	//$today=date('d-m-Y'); 

    /*echo "<h3>Your first name is <?=$firstName?></h3>";
    echo "<h3>Your Surname is <?=$surName?></h3>";
    echo "<h3>Your address is <?=$address?></h3>";
    echo "<h3>Your age is <?=$age->$year?> ,<?=$age->$month?> and <?=$age->$day?></h3>";*/


?>

<html>
<head>
</head>
<body>

    <div>
        <h3>Your first name is <?=$firstName?></h3>
        <h3>Your Surname is <?=$surName?></h3>
        <h3>Your address is <?=$address?></h3>
        <h3>Your age is <?=$age->y?></h3>
    </div>

<form method="post" action="">
    <input type="text" name="firstName"/>
    <input type="text" name="surName"/>
    <input type="text" name="address"/>
    <input type="date" name="dob"/>
    <input type="submit"/>
</form>
</body>
    </html>