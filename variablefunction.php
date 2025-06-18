<?php
function abc(){
    echo "<h1>this is a abc function </br></h1>";
}


// calling the function using a variable 
 $abc = "abc";


function main ($callback){
    echo "this is a main function ! ";
    $callback();
}


main($abc);


// in this example we are calling the function in a variable 

function mangesh($a,$b){
    return $a*$b;
}



$atharva = "mangesh";

$result = $atharva(10,10);

echo "<h1 style=color:orange> this is the result fo given data $result</h1>";


function test(){
    echo "test functoin called";
}

$test = "test";

function good($test){
    echo "main function also is running <br/>";
    $test();    
}

good($test); 