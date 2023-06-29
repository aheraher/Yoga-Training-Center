<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    // Validate and process the form data
    // In this basic example, we'll just display the submitted details

    echo "<h2>Form Submission Successful</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Contact No.:</strong> $contactNo</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Location:</strong> $location</p>";
}
?>