<?php
/*write php script to display what age group people participated in Event.*/

$ages = [18,25,36,20,23,21,31];

$groups = array_count_values(array_map(function ($v) { return (int)($v / 10); }, $ages));

for ($i = 0; $i <= max(array_keys($groups)); $i++) 
{
    echo $i*10 . " to " . ($i*10+9) . " years: " . (isset($groups[$i]) ? $groups[$i]: 0) . "<br>";
}

?>