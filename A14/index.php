<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
<?php

$name ="";
$nameErr = $err =$passErr = "";
session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $password = $_POST["password"];
             
        if(empty($_POST["name"])){
            $nameErr = "Name is not Enter";
        }
        if(empty($_POST["password"])){
            $passErr = "Password is not Enter";
        }

        if($nameErr == "" && $passErr == ""){
            if (($name == "ayush") && ($password == "ayush")){
                header("Location: welcome.php");
                $_SESSION["name"] = $name;
    
            }
            else{
                $err =  "User Name and Password is incorrect";
        }
   
        }
    }
    
    // if(isset($_POST["submit"])){
    //     echo $name;
    //     echo $password;
    // }
    
   
?>
<form method="post">
        <br>
        Username: <input type="text" placeholder="Enter Username" name ="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" placeholder="Enter Password" name = "password">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>
        <span class="error"><?php echo $err; ?></span><br>

    <button type="submit">Login</button>
    </form>
    
</body>
</html>