<?php

    $event = array(
        array("event"=>"birthday","name"=> "a", "age"=>20),
        array("event"=>"wedding","name"=> "b", "age"=>22),
        array("event"=>"wedding","name"=> "c", "age"=>22),
        array("event"=>"birthday","name"=> "d", "age"=>20),
        array("event"=>"wedding","name"=> "e", "age"=>21)
    );

    $age = array_column($event,"age");
    $age_group = array_count_values($age);

    foreach ($age_group as $key => $value){
        echo $value," person having ", $key;
        echo "<br>";
    };
?>