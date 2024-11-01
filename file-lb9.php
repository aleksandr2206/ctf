<?php
// Attempt to read files in a specific directory
$directory = isset($_GET['directory']) ? $_GET['directory'] : '';

// Validate and sanitize the user-supplied directory
$sanitizedDirectory = filter_var($directory, FILTER_SANITIZE_STRING);

// Check if the directory is valid
if (is_dir($sanitizedDirectory)) {
    // Read the contents of the directory
    $files = scandir($sanitizedDirectory);

    // Display the contents of the directory
    foreach ($files as $file) {
        echo $file . "<br>";
    }
} else {
    echo "Invalid directory";
}
?>