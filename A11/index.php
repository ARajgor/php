<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form method="post">
        <br>
        Username: <input type="text" placeholder="Enter Username" name ="name" required><br><br>
        Password: <input type="password" placeholder="Enter Password" name = "password" required><br><br> 

    <button type="submit">Login</button>
    </form>
    <?php
    $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $password = $_POST["password"];          
        }
        if ($name == "ayush" && $password == "ayush"){
            header("Location: welcome.php");
        }
        // if(isset($_POST["submit"])){
        //     echo $name;
        //     echo $password;
        // }
        
       
    ?>
</body>
</html>