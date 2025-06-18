<?php
$fruits = ["apple", "banana", "mango", "orange", "grapes"];

foreach ($fruits as $x) { // for each loo
    echo $x;
    echo "<br/>";
}


foreach ($fruits as $x) { // for each loop with continue statement this will skip the mango 
    if ($x == "mango") {
        continue;
    }
    echo $x;
    echo "<br/>";
}


foreach ($fruits as $x) {
    if ($x == "mango") {
        break;

    }
    
    echo$x;
    echo "<br/>";
}