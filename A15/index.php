<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php

    $_SESSION['count_login'] = 0;
    session_start();

    // define variables and set to empty values
    $userErr =  $passwordErr = $allErr =  "";
    $user = $password =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["user"])) {
            $userErr = "Name is required";
        } else {
            $user = test_input($_POST["user"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
        if ($user == "ayush" && $password == "ayush") {
            $_SESSION["user"] = $user;
    ?>

            <script>
                if (alert("Form Submited Successfully......!!!")) {
                    <?php header("Location: http://localhost/project/A15/welcome.php"); ?>
                }
            </script>
    <?php

        }
        if (!empty($_POST["user"]) && !empty($_POST["password"])) {
            $allErr = "Enter valid username and password.....!!!";
            $user = $password = "";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Login</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        User Id: <input type="text" name="user" value="<?php echo $user; ?>">
        <span class="error">* <?php echo $userErr; ?></span>
        <br><br>

        Password: <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <span class="error">* <?php echo $allErr; ?></span>
    </form>

    <?php
    if (isset($_SESSION['count_login'])) {
        echo "login page reload count: {$_SESSION['count_login']}\n";
        $_SESSION['count_login'] = $_SESSION['count_login'] + 1;
    } else {
        $_SESSION['count_login'] = 0;
    }
    $_SESSION['totle']=$_SESSION['count_login'] + $_SESSION['count_wc'];
    echo "<br>totle page reload count: " . $_SESSION['totle'];
    ?>
</body>

</html>
