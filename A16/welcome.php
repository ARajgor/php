<?php
$views = "demoTxt";
    $visitors_file = "visitors.txt";
    if (file_exists($visitors_file)) {
        $views = file_get_contents($visitors_file);
    }
    file_put_contents($visitors_file, $views);
?>