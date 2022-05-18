<?php
        $con = mysqli_connect("localhost","root","","test");

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

    ?>
