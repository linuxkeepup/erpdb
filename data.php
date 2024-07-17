<?php
// Step 3: Connect to MySQL database
include 'dbcon.php';

// Step 4: Read the CSV file
$csvFile = fopen('data.csv', 'r');

// Step 5: Parse and Insert Data into MySQL
while (($row = fgetcsv($csvFile)) !== false) {
    // Assuming data format: column1, column2, column3
    $column1 = mysqli_real_escape_string($link, $row[0]);
    $column2 = mysqli_real_escape_string($link, $row[1]);
    $column3 = mysqli_real_escape_string($link, $row[3]);
    $column4 = mysqli_real_escape_string($link, $row[4]);
    $column5 = mysqli_real_escape_string($link, $row[5]);
    $column6 = mysqli_real_escape_string($link, $row[6]);
    $column7 = mysqli_real_escape_string($link, $row[7]);
    $column8 = mysqli_real_escape_string($link, $row[8]);

    // Step 6: Insert data into MySQL table
    $query = "INSERT clients (column1, column2, column3, column4, column5, column6, column7, column8) VALUES ('$column1', '$column2', '$column3' '$column4', '$column5', '$column6', '$column7', '$column8')";
    mysqli_query($link, $query);
}

// Step 7: Handle Errors
if (mysqli_error($link)) {
    echo "Error: " . mysqli_error($link);
} else {
    echo "Data inserted successfully.";
}

// Step 8: Close connection
mysqli_close($link);
?>
