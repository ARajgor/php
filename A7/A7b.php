<?php

/*to Create Student Marksheet that display Student Enrollment, Student Name,
Subject Name and Marks , Percentage. Also check student grade based on Percentage.*/

echo "<h2>Student Marksheet</h2>";

$name="Ayush Rajgor";
$Eno=53;

echo "Student's Name is $name.<br>";
echo "Enrollment No. is $Eno.<br>";

$Maths=85;
$Physics=95;
$Chemistry=80;

$t=$Maths+$Physics+$Chemistry;
$p=($t*100)/300;

echo "<h3>Marks</h3>";

echo "Maths : $Maths <br>";
echo "Physics : $Physics <br>";
echo "Chemistry : $Chemistry <br>";

echo "<h3>Total</h3>";

echo "Total Marks : $t <br>";
echo "Percentage : $p <br>";

if($p>=60)
{
echo "<h3>Grade : A</h3>";
}
if($p>=50 and $p<60)
{
echo "<h3>Grade : B</h3>";
}
if($p>=40 and $p<50)
{
echo "<h3>Grade : C</h3>";
}
if($t<40)
{
echo "<h3>Grade : F</h3>";
}
;
?>