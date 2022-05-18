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
    // define variables and set to empty values
    $fnameErr = $lnameErr = $useridErr = $emailErr = $genderErr = $cpasswordErr = $CountryErr = $educationErr = $cnoErr = "";
    $fname = $lname = $userid = $email = $gender = $comment = $Country = $password = $cpassword = $fpassword  = "";
    $fnamef = $lnamef = $useridf = $emailf = $cnof = $educationf = $genderf = $commentf = $Countryf = $passwordf = 0;
    $cno = null;
    $education = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z- ]*$/", $fname)) {
                $fnameErr = "Only Character and white space allowed";
            } else {
                $fnamef = 1;
            }
        }
        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z- ]*$/", $lname)) {
                $lnameErr = "Only Character and white space allowed";
            } else {
                $lnamef = 1;
            }
        }

        if (empty($_POST["userid"])) {
            $useridErr = "Name is required";
        } else {
            $userid = test_input($_POST["userid"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z0-9#@]*$/", $userid)) {
                $useridErr = "Only Character,Number,# and @ allowed";
            } else {
                $useridf = 1;
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

        if (isset($_REQUEST['Country']) && $_REQUEST['Country'] == '-1') {
            $CountryErr = 'Please select a country.';
        } else {
            $Country = test_input($_REQUEST['Country']);
            $Countryf = 1;
        }

        if (isset($_REQUEST['education'])) {
            $education = $_REQUEST['education'];
            $educationf = 1;
        } else {
            $educationErr = 'Please select atleast one checkbox.';
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
            $commentf = 1;
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
            $genderf = 1;
        }

        if (!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
            $password = test_input($_POST["password"]);
            $cpassword = test_input($_POST["cpassword"]);
            if (strlen($_POST["password"]) <= '8') {
                $cpasswordErr = "Your Password Must Contain At Least 8 Characters!";
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $cpasswordErr = "Your Password Must Contain At Least 1 Number!";
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $cpasswordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $cpasswordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            } else {
                $fpassword = test_input($_POST["password"]);
                $passwordf = 1;
            }
        } elseif (!empty($_POST["password"])) {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        } else {
            $cpasswordErr = "Please enter password   ";
        }
    }
    if ($fnamef == 1 && $lnamef == 1 && $useridf == 1 && $emailf == 1 && $cnof == 1 && $educationf == 1 && $genderf == 1 || $commentf == 1 && $Countryf == 1 && $passwordf == 1) {
    ?>

        <script>
            if (alert("Form Submited Successfully......!!!")) {
                <?php header("Location: welcome.php"); ?>
            }
        </script>
        
    <?php
    include("welcome.php"); 
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Event Registration</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        First Name: <input type="text" name="fname">
        <span class="error">* <?php echo $fnameErr; ?></span>
        <br><br>
        Last Name: <input type="text" name="lname">
        <span class="error">* <?php echo $lnameErr; ?></span>
        <br><br>
        User Id: <input type="text" name="userid">
        <span class="error">* <?php echo $useridErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Cotact Number: <input type="tel" name="cno">
        <span class="error"><?php echo $cnoErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        Country:
        <select name="Country">
            <option value="-1">Select</option>
            <option value="India"> India</option>
            <option value="Brazil"> Brazil</option>
            <option value="Canada"> Canada</option>
            <option value="Russia"> Russia</option>
            <option value="U.S.A"> U.S.A</option>
        </select>
        <span class="error">* <?php echo $CountryErr; ?></span>
        <br><br>

        <tr>
            <td>
                <lable for="education">Education: </lable>
            </td>
            <td>S.S.C<input type="checkbox" name="education[]" value="SSC">
                H.S.C<input type="checkbox" name="education[]" value="HSC">
                B.E.<input type="checkbox" name="education[]" value="BE">
                M.E.<input type="checkbox" name="education[]" value="ME">
                Others<input type="checkbox" name="education[]" value="others">
            </td>
        </tr>
        <span class="error">* <?php echo $educationErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>

        Password: <input type="password" name="password">
        <span class="error">* </span>

        <?php print("&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"); ?>

        Confirm Password: <input type="password" name="cpassword">
        <span class="error">* <?php echo $cpasswordErr; ?></span>
        <br>
        [Password should contain at least 8 lenght (at least one capital,one small,one numeric)]
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>