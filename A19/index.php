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

  $con = mysqli_connect("localhost", "root", "", "lab19");
  if (mysqli_connect_errno()) {
    die("connection failed: " . mysqli_connect_error());
  }



  // define variables and set to empty values
  $nameErr = $inameErr = $emailErr =  $cnoErr = $reviewErr = "";
  $name = $iname = $email = $review =  "";
  $namef = $inamef = $emailf = $cnof = $reviewf = 0;
  $cno = null;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
        $nameErr = "Only Character and white space allowed";
      } else {
        $namef = 1;
      }
    }

    if (empty($_POST["iname"])) {
      $inameErr = "Institute/Company name is required";
    } else {
      $iname = test_input($_POST["iname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
        $inameErr = "Only Character and white space allowed";
      } else {
        $inamef = 1;
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      } else {
        $emailf = 1;
      }
    }

    if (empty($_POST["cno"])) {
      $cnoErr = "Contact Number is required";
    } else {
      $cno = test_input($_POST["cno"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!preg_match("/^[0-9]{10}+$/", $cno)) {
        $cnoErr = "Invalid Contact Number";
      } else {
        $cnof = 1;
      }
    }

    if (empty($_POST["review"])) {
      $reviewErr = "Review is required";
    } else {
      $review = test_input($_POST["review"]);
      $reviewf = 1;
    }
  }
  if ($namef == 1 && $inamef == 1 && $emailf == 1 && $cnof == 1 && $reviewf == 1) {

    $sql = "INSERT INTO `feedback` (`name`,`cno`,`email`,`iname`,`review`) VALUES ('$name','$cno','$email','$iname','$review')";
    if (mysqli_query($con, $sql)) {
      $showAlert = true;
   
    }

  ?>

    <script>
      if (alert("Form Submitted Successfully......!!!")) {
        <?php header("Location: http://localhost/project/A19/welcome.php"); ?>
      }
    </script>
  <?php

  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>Feedback form</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Cotact Number: <input type="tel" name="cno" value="<?php echo $cno; ?>">
    <span class="error"><?php echo $cnoErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Institute/Company: <input type="text" name="iname" value="<?php echo $iname; ?>">
    <span class="error">* <?php echo $inameErr; ?></span>
    <br><br>
    Review: <textarea name="review" rows="5" cols="40" value="<?php echo $review; ?>"></textarea>
    <span class="error">* <?php echo $reviewErr; ?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>
