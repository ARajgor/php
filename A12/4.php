<?php
    $count = (int)file_get_contents('count.txt');
    $count++;
    setcookie("Cookie",$count);

    file_put_contents('count.txt',$count);

    if(isset($_COOKIE["Cookie"])){
        echo "you have visited this page ".$count." times";
    }
    else{
        echo "welcome This is your first visit";
    }
    
?>