

<?php
$array = [];
if (($handle = fopen("Book1.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 0, ",")) !== false) {
        $array[] = $data; // Store each row in the array
    }
    fclose($handle); // Close the file after reading
}

// Start the HTML table
echo "<table border='1'>";

// Iterate through each row
foreach ($array as $row) {
    echo "<tr>"; // Start a new row in the table

    // Iterate through each column in the row
    foreach ($row as $col) {
        echo "<td>" . htmlspecialchars($col) . "</td>"; // Print each column in a table cell
    }

    echo "</tr>"; // End the row
}

// End the HTML table
echo "</table>";
?>