<!-- <?php

function multiply($a , $b){
  return $a*$b;
}

function calculate($callback , $x , $y){
echo "performing code ....";
echo "<br/>";

echo $callback($x,$y);
}

echo calculate ("Multiply", 5,5);
echo "<br/>";
?>

 -->
<?php

function sayhello(){
    echo "Hello, World!";
}

function register(){
    echo "please register to continue !";
}
function login($callback){
    $callback();
    echo "you are logged in ! ";
}

login("sayhello");
