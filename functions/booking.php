<?php

function booking($date, $name, $connection) {
    // Prepare the SQL query to insert the user data
    $query = "INSERT INTO bookings (date, name) VALUES ('$date', '$name')";

    // Execute the query
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Registration successful
        echo "Booking successful.";
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($connection);
    }
}

function getBookings() {
    global $connection;
    $query = "SELECT * FROM bookings";
    $result = mysqli_query($connection, $query);
    if ($result) {
        return $result;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>