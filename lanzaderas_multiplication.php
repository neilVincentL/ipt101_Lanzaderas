<?php
$number = 5; // Set the number for the multiplication table

echo "<table>"; // Create an HTML table to display the multiplication table

for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>" . $number . " x " . $i . "</td><td>=</td><td>" . ($number * $i) . "</td></tr>"; // Create a row for each multiplication
}

echo "</table>"; // Close the HTML table
?>