
<hr>
<h1>Example access to database mysql</h1>
<br>
<?php
//Example 2: Access to DB
$servername = "localhost";
$username = "wad";
$password = "Wad123456!";
$dbname = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT employeeNumber,
    lastName,
    firstName,
    extension,
    email,
    officeCode,
    reportsTo,
    jobTitle
FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["employeeNumber"]. $row["lastName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>