<?php
// Check if the distance and timestamp parameters are set
if (isset($_POST['distance']) && isset($_POST['timestamp'])) {
    // Get the distance and timestamp values
    $distance = $_POST['distance'];
    $timestamp = $_POST['timestamp'];

    // Append the data to a text file
    $data = "Distance: " . $distance . " cm - Timestamp: " . $timestamp . "\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    // Send a success response
    echo "Data received successfully.";
} else {
    // Send an error response
    echo "Error: Parameters missing.";
}
?>