==> register.php <==
<?php
include 'connect.php';
// Validate and sanitize the form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$fullame = mysqli_real_escape_string($conn, $fullname);
$email = mysqli_real_escape_string($conn, $email);
$gender = mysqli_real_escape_string($conn, $gender);
// Perform additional validation if required

// Insert the data into the "students" table
$sql = "INSERT INTO students (fullname, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>