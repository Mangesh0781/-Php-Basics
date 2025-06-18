<?php
 
$users =[
 [1, "mangesh:", "jalna", "m@gmail.com"],
 [2, "atharva:" , "chatrapati sambhaji nagar", "a@gmail.com"],
 [3, "aditi:", "australia", "ap@gmail.com"],
];

for($i=0; $i<count($users); $i++){
    for($j=0; $j<count($users[$i]); $j++){
      
         
     echo $users[$i][$j];
        echo "<br/>";

    }
}

// in this code when the code is executing i then j it will print like index 0, index 1, index 2, index 3 in this program we are using nested for loop ;