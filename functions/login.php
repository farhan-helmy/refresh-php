<?php

function login($email, $password, $connection){
    // Sanitize user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // Prepare the SQL query to fetch the user data
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Check if the email exists
        if (mysqli_num_rows($result) == 1) {
            // Email exists, now verify the password
            $user = mysqli_fetch_assoc($result);

            if ($password === $user['password']) {
                // Password verified, set the session variables
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['is_admin'] = $user['is_admin'];
                $_SESSION['address'] = $user['address'];
                // Redirect to welcome.php
                header("location: dashboard.php");
                exit;
            } else {
                // Password incorrect
                echo "Incorrect password.";
                return false;
            }
        } else {
            // Email doesn't exist
            echo "Email doesn't exist.";
            return false;
        }
    } else {
        // SQL query failed
        echo "Error: " . mysqli_error($connection);
    }
}

?>