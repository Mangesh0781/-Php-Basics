<?php

$userdetails=[
    "name" => "mangesh",
    "age"=> 20,
    "email" => "mangesh@gmail.com",
    "state" => "maharashtra",



];

// foreach($userdetails as $key => $data){
//     echo $key   .  "is" .   $data ;
//     echo "<br/>";
// }
 foreach($userdetails as $key=> $data):
     echo $key ."is ". $data;
     echo "<br/>";
     endforeach;