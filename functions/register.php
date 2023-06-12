<?php

function registerUser($email, $password, $isAdmin, $connection, $address) {
    // Sanitize user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $address = mysqli_real_escape_string($connection, $address);
    
    // Convert isAdmin checkbox value to 0 or 1
    $isAdmin = $isAdmin ? 1 : 0;

    // Prepare the SQL query to insert the user data
    $query = "INSERT INTO users (email, password, is_admin, address) VALUES ('$email', '$password', $isAdmin, '$address')";

    // Execute the query
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Registration successful
        echo "User registered successfully.";
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($connection);
    }
}
?>