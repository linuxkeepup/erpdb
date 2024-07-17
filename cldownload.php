<?php
// Database connection
require_once "dbcon.php";

// Query to fetch data from the 'clients' table
$query = "SELECT * FROM crud_db.clients";
$result = mysqli_query($link, $query);

if (!$result) {
    // Query failed, display error message
    die("Query Failed: " . mysqli_error($link));
} else {
    // Initialize an empty array to store the data
    $data = array();

    // Fetch data rows and add them to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Free result set
    mysqli_free_result($result);
}

// Close database connection
mysqli_close($link);

// Set response headers for CSV file download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=client_data.csv');

// Open output stream
$output = fopen('php://output', 'w');

// Write header row
if (!empty($data)) {
    fputcsv($output, array_keys($data[0])); // Write headers based on the first row of data
}

// Write data rows
foreach ($data as $row) {
    fputcsv($output, $row);
}

// Close output stream
fclose($output);
