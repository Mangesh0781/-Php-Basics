<?php
 
$users =[
 [1, "mangesh:", "jalna", "m@gmail.com"],
 [2, "atharva:" , "chatrapati sambhaji nagar", "a@gmail.com"],
 [3, "aditi:", "australia", "ap@gmail.com"],
];
echo "<table border='1' cellpadding='10' cellspacing='0' width='50%' style='border-collapse: collapse;' >";
for($i=0; $i<count($users); $i++){
echo "<tr>";
    
    for($j=0; $j<count($users[$i]); $j++){
      echo "<td>";
         
     echo $users[$i][$j];
      echo "</td>";
    

    }
    echo "</tr>";
}
echo "</table>";


// data in table format using nested for loop