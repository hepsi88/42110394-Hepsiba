<?php
include 'dbcon.php';


$flightNo = $_POST['flightNo'];
$flightName = $_POST['flightName'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$departureTime = $_POST['departureTime'];
$arrivalTime = $_POST['arrivalTime'];
$duration = $_POST['duration'];
$cost = $_POST['cost'];


$sql = "INSERT INTO flights (flightNo, flightName, source, destination, departureTime, arrivalTime, duration, cost)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssssd', $flightNo, $flightName, $source, $destination, $departureTime, $arrivalTime, $duration, $cost);


if ($stmt->execute()) {
    echo "Flight details entered successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
