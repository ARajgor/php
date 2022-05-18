<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        $con = mysqli_connect("localhost","root","","test");
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST["email"];

        $query = "SELECT * FROM `user` WHERE email = '$email'";
        $res = mysqli_query($con,$query);
        
        $result = mysqli_fetch_assoc($res);
        
        echo "first name: ".$result["fname"]."<br>";
        echo "last name: ".$result["lname"]."<br>";
        echo "Email: ".$result["email"]."<br>";
        echo "Address: ".$result["address"]."<br>";
        echo "city: ".$result["city"]."<br>";
        echo "pincode: ".$result["pcode"]."<br>";
        echo "gender: ".$result["gender"]."<br>";
        echo "contact no: ".$result["contno"];
}
    ?>

<body>
    
    <form method="POST">
        <input type="text" name="email" placeholder="Email" require>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>