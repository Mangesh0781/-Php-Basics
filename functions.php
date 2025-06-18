<?php

function test(){
     echo "<h1>this is a test function</h1>";

}

echo test();


function userdata($name , $color){
    return "<h1 style='color:$color'>$name</h1>";
}

echo userdata("ADITI PANDIT", "red");
 echo userdata("ATHARVA PANDIT", "orange");
 echo userdata("MANGESH PANDIT", "yellow");



 function name(){
     return "mangesh pandit";

}

echo name();
?>