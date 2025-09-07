<?php
$siteUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hotel/Hotel-web.php";
$SiteTitle = "The Palms";
// Database connections
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'booking';
$conn = new mysqli('localhost','root','','booking');
if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
// Retrieve form data
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$specialRequests = $_POST['specialRequests'];
$roomType = $_POST['roomType'];
$guests = $_POST['guests'];
// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO booking (firstName, lastName, phone, email, checkIN, checkOut, specialRequests, roomType, guests) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssssi", $firstName, $lastName, $phone, $email, $checkIn, $checkOut, $specialRequests, $roomType, $guests);
$execval=$stmt->execute();
echo $execval;
echo "Booking confirmed! We will contact you shortly";
$stmt->close();
$conn->close();
?>
