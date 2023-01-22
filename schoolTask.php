<?php
    if ((isset($_POST)) && (!empty($_POST))) {
   $firstName = $_POST["firstName"];
   $surName = $_POST["surName"];
   $address = $_POST["address"];
   $dob = $_POST["dob"];
   $dadName = $_POST["dadName"];
   $mumName = $_POST["mumName"];
   //die (print_r($_POST));

   $nameArray = ['Andrew', 'Emma', 'Hanish','Tristan', 'Jack', 'Oliver','Lily'];

   $errorArray = [];

   $succes = true;

   $fnameLength = strlen($firstName);
   $snameLength = strlen($surName);
   $addressLength = strlen($address);

   if ($fnameLength > 10) {
    $invalidFname = "Firstname can't be more than 10 Characters";
    array_push($errorArray, $invalidFname);
   }

   if (in_array($firstName, $nameArray, TRUE)){
    $matchErr = "Sorry but a student with the name '.$firstName.' has already been registered";
    array_push($errorArray, $matchErr);
   }
  
   if ($snameLength > 10) {
    $invalidSname = "Surname can't be more than 10 Characters";
    array_push($errorArray, $invalidSname);
   }
 
   if ($addressLength == 0) {
    $invalidAddress = "Please enter your address";
    array_push($errorArray, $invalidAddress);
   }

 /* if ($numberCharac == false) {
    $invalidNumber = "The number you have entered is invalid";
    array_push($errorArray, $invalidNumber);
   }*/
}
?>

<html>
<head>
    <style>
        .bodyWrapper {
            padding: 0px 35% !important;
        }

        .input {
            display: block;
            background-color: rgba(0, 0, 0, 0);
            height: 75px;
            width: 350px;
            color: black;
        }
        #submit {
            height: 75px;
            width: 350px;
            color: black;
            font-weight: bold;
            background-color: #fadadd;
        }

        h1 {
            font-family: sans-serif;
            text-align: center;
        } 

        .h3{
            font-family: sans-serif;
        }

        .resultDiv .error {
            color: red;
            font-weight: bold; 
        }
        .resultDiv .success {
            color: green;
            font-weight: bold; 
        }

        .resetBtn {
            height: 75px;
            width: 350px;
            color: white;
            font-weight: bold;
            background-color: orange;
            text-decoration:none;
            appearance: auto;
            user-select: none;
            white-space: pre;
            align-items: flex-start;
            text-align: center;
            cursor: default;
            box-sizing: border-box;
            padding: 20px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: buttonborder;
            border-image: initial;
        }
    </style>
</head>
<body>
    <div class='bodyWrapper'>
        <h1>Apply to Ndamukong Academy</h1>
        <?php
        if (isset($errorArray) && !empty($errorArray)) { ?>
            <div class='resultDiv'>
                <?php
                    $errorArrayLength = count($errorArray);
                    //echo "$errorArrayLength";
                    if($errorArrayLength > 0)  {
                        foreach($errorArray as $problems){ ?>
                            <p class='error'><?=$problems?></p>
                        <?php
                        }
                    }
                    
                ?>


            </div>
            <?php 
        } else {
            if (isset($succes) && ($succes = true)){

             ?>

            <p class='success'>Thank You for applying to Ndamukong Academy! Our admissions team will get back to you shortly.</p>
            <h3 class="h3">Your first name is <?=$firstName?></h3>
                <h3 class="h3">Your Surname is <?=$surName?></h3>
                <h3 class="h3">Your address is <?=$address?></h3>
                <h3 class="h3">Your Mother's name is <?=$mumName?></h3>
                <h3 class="h3">Your Father's name is <?=$dadName?></h3>
                <h3 class="h3">Your date of birth is <?=$dob?></h3>
        <?php
        }
    }
        ?>

        <form method="post" action="" id>
            <input type="text" name="firstName" placeholder="Enter your firstname" class="input"/>
            <input type="text" name="surName" placeholder="Enter your surname"  class="input"/>
            <input type="text" name="address" placeholder="Enter your address" class="input"/>
            <input type="text" name="mumName" placeholder="Enter your mother's first name" class="input"/>
            <input type="text" name="dadName" placeholder="Enter your father's first name" class="input"/>
            <input type="date" name="dob" placeholder="Date of birth" class="input"/>
            <a class='resetBtn' href='http://localhost/submitform/schoolTask.php'>Reset</a>
            <input type="submit" id="submit"/>
            <!--<input type="submit">-->
        </form>
    </div>
</body>
</html>