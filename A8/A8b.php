<?php

//normal function

function greeting()
{
    print("Hi<br>");
}
greeting();

//with arguments

function power($num1,$num2)
{
    $ans=1;
    for($i=1;$i<$num2;$i++)
    {
        $ans=$ans*$num1;
    }
    print($ans."<br>");
}
power(2,3);

//call by value

function exchange($num1,$num2)
{
    $temp=$num2;
    $num2=$num1;
    $num1=$temp;
}
$num1=5;
$num2=10;

print("Before calling, numbers are : <br>");
print("Num1=".$num1."\nNum2=".$num2);

exchange($num1,$num2);

print("<br> After calling, numbers are : <br>");
print("Num1=".$num2."\nNum2=".$num1."<br>");

//call by reference

function exchange1(&$num1,&$num2)
{
    $temp=$num2;
    $num2=$num1;
    $num1=$temp;
}
$num1=5;
$num2=10;

print("Before calling, numbers are : <br>");
print("Num1=".$num1."\nNum2=".$num2);

exchange1($num1,$num2);

print("<br> After calling, numbers are : <br>");
print("Num1=".$num1."\nNum2=".$num2."<br>");

//strict parameter declaration no datatypes specified

function sum($a,$b)
{
    print(gettype($a))."<br>";
    print(gettype($b))."<br>";
    return $a+$b;
}
print(sum(5,"2")."<br>");

//strict parameter declaration datatypes specified

function sum1(int $a,float $b)
{
    print(gettype($a))."<br>";
    print(gettype($b))."<br>";
    return $a+$b;
}
print(sum1(5,"2")."<br>");

//strict mode on

//declare(strict_types=1);
function sum2(int $a,float $b)
{
    print(gettype($a))."<br>";
    print(gettype($b))."<br>";
    return $a+$b;
}
print(sum2(5,2)."<br>");

//returning value

function addition($n1,$n2,$n3)
{
    $sum=$n1+$n2+$n3;
    return($sum);
}
print(addition(1.1,2.7,3)."<br>");

//return datatypes

function addition1($nu1,$nu2,$nu3)
{
    $sum=$nu1+$nu2+$nu3;
    return(int)($sum);
}
print(addition1(1.1,2.7,3)."<br>");

function addition2($numb1,$numb2,$numb3) :int
{
    $sum=$numb1+$numb2+$numb3;
    return($sum);
}
print(addition2(1.1,2.7,3)."<br>");

//deafault arguments

function addition3($number1=0,$number2=0,$number3=0) 
{
    $sum=$number1+$number2+$number3;
    return($sum);
}
print(addition3()."<br>");
print(addition3(1)."<br>");
print(addition3(1,2)."<br>");
print(addition3(1,2,3));
?>