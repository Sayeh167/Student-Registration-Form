==> registration.php <==

<!DOCTYPE html>
<html>
<head>
  <title>Student Form</title>
</head>
<body>
  <h1>Student Form</h1>
  <form action="register.php" method="POST">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>