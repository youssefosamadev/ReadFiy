<?php
// index.php - Entry point for the project

// Define the default file to open
$defaultFile = 'HomePage.html';

// Check if the default file exists
if (file_exists($defaultFile)) {
    // Redirect to the default file
    header("Location: $defaultFile");
    exit(); // Ensure no further code is executed after redirection
} else {
    // If the default file is missing, show an error message
    echo "Error: The default file '$defaultFile' could not be found.";
}
?>