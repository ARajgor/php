<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $x=76;
        $y=56;
        echo "<h2>Arithmetic Operators</h2>";
        echo "Addition: ", $x, " + ", $y, " = ", $x + $y, "<br>";
        echo "Subtraction: ", $x, " - ", $y, " = ", $x - $y, "<br>";
        echo "Multiplication: ", $x, " * ", $y, " = ", $x * $y, "<br>";
        echo "Division: ", $x, " / ", $y, " = ", $x / $y, "<br>";
        echo "Modulus: ", $x, " % ", $y, " = ", $x % $y, "<br>";
        echo "Exponentiation: ", $x, " ** ", $y, " = ", $x ** $y, "<hr>";

        $a = "45";
        $b = 45;
        echo "<h2>Comparison Operators</h2>";
        echo  "Equal: ",$a, " == \"", $b, "\" =>", var_dump($a == $b), "<br>";
        echo  "Identical: ", $a, " === \"", $b, "\" =>", var_dump($a === $b), "<br>";
        echo  "Not Equal: ", $a, " !=||<> \"", $b, "\" =>", var_dump($a != $b), "<br>";
        echo  "Not Identical: ", $a, " !== \"", $b, "\" =>", var_dump($a !== $b), "<br>";
        echo  "Greater than: ", $a, " > \"", $b, "\" =>", var_dump($a > $b), "<br>";
        echo  "Less than: ", $a, " < \"", $b, "\" =>", var_dump($a < $b), "<br>";
        echo  "Greater than or equal to: ", $a, " >= \"", $b, "\" =>", var_dump($a >= $b), "<br>";
        echo  "Less than or equal to: ", $a, " <= \"", $b, "\" =>", var_dump($a <= $b), "<br>";
        echo  "Spaceship: ", $a, " >= \"", $b, "\" <=>", var_dump($a <=> $b), "<hr>";

        $c=true;
        $d=false;
        echo "<h2>Logical Operators</h2>";
        echo  "And: true and/&& false =>", var_dump($c and $d),"<br>";
        echo  "Or: true or/|| false =>", var_dump($c or $d), "<br>";
        echo  "Xor: true xor false =>", var_dump($c xor $d), "<br>";
        echo  "Not: !true =>", var_dump(!$c), "<hr>";

        $d1 = 23;
        $d2 = 7;
        echo "<h2>Assignment Operators </h2>", "<br>";
        echo "Addition : ", $d1 += $d2, "<br>";
        echo "Subtration : ", $d1 -= $d2, "<br>";
        echo "Multiplication : ", $d1 *= $d2, "<br>";
        echo "Division : ", $d1 /= $d2, "<br>";
        echo "<hr>";

        $e1 = "Ayush ";
        $e2 = "Rajgor";
        echo "<h2>String Operators </h2>", "<br>";
        echo "Concatenation: ", $e1 . $e2, "<br>";
        echo "Concatenation assignment: ", $e1 .= $e2, "<br>";
        echo "<hr>";

        $f1 = array('12','3','45','6');
        $f2 = array('78','43','1','2');
        echo "<h2>Array Operators </h2>", "<br>";
        print_r($f1+$f2);
        echo "<br>";
        // echo "Union: ", $f1 + $f2, "<br>";
        echo "Equality: ";
        var_dump($f1 == $f2);
        echo "<br>";
        echo "Identity: ";
        var_dump($f1 === $f2);
        echo "<br>";
        echo "Inquality: ", $f1 != $f2, "<br>";
        echo "Non Identity: ", $f1 !== $f2, "<br>";
    ?>
</body>

</html>