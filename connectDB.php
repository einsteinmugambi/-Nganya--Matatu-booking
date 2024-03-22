<?php
require_once 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pickup = $_POST['pickup'];
$destination = $_POST['destination'];
$date =$_POST['date'];
$time = $_POST['time'];
$num_seats = $_POST['num_seats'];

$sql = "INSERT INTO bookings (name, email, phone, pickup, destination, date, time, num_seats) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssssssii", $name, $email, $phone, $pickup, $destination, $date, $time, $num_seats);

    if ($stmt->execute()) {
        echo "Booking submitted successfully!";
    } else {
        echo "Error submitting booking: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>