<?php

$users =[
 ["name"=>"sam", "age"=>0, "city"=>"jalna"],
 ["name"=>"kishor", "age"=>5, "city"=>"pume"],
 ["name"=>"rakesh", "age"=>15, "city"=>"goa"],
 ["name"=>"roshan", "age"=>20, "city"=>"delhi"],
 
];

echo "<table border=1>";
foreach($users as $user){
    echo "<tr>";
foreach($user as $key => $items){
    echo "<td>";
    echo "$key is $items ";
    echo "<br/>";
    echo "</td>";
}
echo "</tr>";
}
echo "</table>";

//  program of multidimensional with associative array;