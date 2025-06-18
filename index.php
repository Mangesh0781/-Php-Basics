<?php

$FRUITS = array(
    "apple" => "Apple",
    "banana" => "Banana",
    "cherry" => "Cherry",
    "date" => "Date",
    "elderberry" => "Elderberry"
);

echo "<h1>Fruits List</h1>";
echo "<table border='1' style='color:blue;'>";

foreach ($FRUITS as $key => $data) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$data</td>";
    echo "</tr>";
}

echo "</table>";
?>
