<?php
    if ((isset($_POST)) && (!empty($_POST))) {
   $firstName = $_POST["firstName"];
   $surName = $_POST["surName"];
   $emailAddress = $_POST["emailAddress"];
   $password = $_POST["password"];
   //die (print_r($_POST));

   $errorArray = [];

   $succes = true;

   $fnameLength = strlen($firstName);
   $snameLength = strlen($surName);
   $emailAddressLength = strlen($emailAddress);
   $passwordLength = strlen($password);

   if ($fnameLength == 0 ) {
    $invalidFname = "Please enter a name.";
    array_push($errorArray, $invalidFname);
   }

  
   if ($snameLength == 0) {
    $invalidSname = "Please enter a surname.";
    array_push($errorArray, $invalidSname);
   }
 
   if ($emailAddressLength <10) {
    $invalidAddress = "Please enter a valid email address.";
    array_push($errorArray, $invalidAddress);
   }

   if ($passwordLength  <8) {
    $invalidPassword = "Please enter a valid password.";
    array_push($errorArray, $invalidPassword);
   }


 /* if ($numberCharac == false) {
    $invalidNumber = "The number you have entered is invalid";
    array_push($errorArray, $invalidNumber);
   }*/
}
?>

<html>
<head>

<title>
Ndamukong Shopping Center
</title>
    <style>
        .bodyWrapper {
            padding: 0px 35% !important;
        }

        #button
        {

            height: 75px;
            width: 350px;
            color: black;
            background-color: #00FF00;
            font-weight: bold;
            bottom: 0%;
            position: fixed;
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

        body 
        {
        background-color: #1c87c9;
        }

        body {
        background-image: url("16k.WEBP");
        background-size: 103% 103%;
        background-repeat: no-repeat;
        color:#cccccc;
      }
    </style>
</head>
<body>
    <div class='bodyWrapper'>
        <h1>Registering a NSC account</h1>
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

            <p class='success'>Thank You for registering your account at NSC.</p>
            <h3 class="h3">Your first name is <?=$firstName?></h3>
            <h3 class="h3">Your Surname is <?=$surName?></h3>
            <h3 class="h3">Your email address is <?=$emailAddress?></h3>
            <button class="button" id="button" onclick="window.location.href='http://localhost/submitform/NdamukongSC3.php';">
                Next
            </button>
        <?php
      


        }
    }
        ?>

        <form method="post" action="" id>
            <input type="text" name="firstName" placeholder="Enter your First name" class="input"/>
            <input type="text" name="surName" placeholder="Enter your Surname"  class="input"/>
            <input type="text" name="emailAddress" placeholder="Enter your email address" class="input"/>
            <input type="password" name="password" placeholder="Enter your password (must be at least 8 characters)" class="input"/>
            <a class='resetBtn' href='http://localhost/submitform/NdamukongSC2.php'>Reset</a>
            <input type="submit" id="submit"/>
        </form>
    </div>
</body>
</html>