<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $building = htmlspecialchars($_POST["buildings"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $bathroom = htmlspecialchars($_POST["bathroom"]);
    $access = htmlspecialchars($_POST["access"]);

// File path for the CSV file
$file = "responses.csv";

// Open the file in append mode
$handle = fopen($file, "a");

// Write the form data to the CSV file
fputcsv($handle, [$building, $gender, $bathroom, $access]);

// Close the file
fclose($handle);

echo "Data submitted successfully!";

}
?>