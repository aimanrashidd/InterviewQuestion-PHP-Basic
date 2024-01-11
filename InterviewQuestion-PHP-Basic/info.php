<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username parameter is set and not empty
    if (isset($_POST["username"]) && !empty($_POST["username"])) {
        // enusre the username input to prevent security issues
        $username = filter_input(INPUT_POST, "username");
        
        // Compare the  username with the expected value
        if ($username === "abc") {
            echo "Verified";
        } else {
            echo "Error";
        }
    } else {
        // Respond with an error if the username parameter is not set or empty
        echo "Error: Username is required";
    }
} else {
    // Respond with an error if the request is not a POST request
    echo "Error: Invalid request method";
}
?>
