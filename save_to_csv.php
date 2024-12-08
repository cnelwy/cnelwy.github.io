<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $building = htmlspecialchars($_POST["buildings"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $bathroom = htmlspecialchars($_POST["bathroom"]);
    $access = htmlspecialchars($_POST["access"]);

    // displays the data in the terminal so that I can check if it works
    echo "<h1>Form Submission</h1>";
    echo "Building: $building<br>";
    echo "Gender: $gender<br>";
    echo "Bathroom Type: "$bathroom"<br>";
    echo "Accessibility: $access<br>";
}
?>
