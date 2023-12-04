<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST["feedback"];

    // You can store the feedback in a database or a file, or send it via email, etc.
    // Example: store in a text file
    file_put_contents("feedback.txt", $feedback . PHP_EOL, FILE_APPEND);

    // Redirect back to the feedback page or a thank-you page
    header("Location: feedback.html");
    exit();
}
?>
