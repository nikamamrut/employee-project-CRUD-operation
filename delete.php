<!DOCTYPE html>
<html>
<head>
    <title>Delete Record</title>
</head>
<body>
    <h2>Delete Record</h2>
    <form method="POST" action="delete.php">
        <label>Employee Number:</label>
        <input type="text" name="empno" required><br><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empno = $_POST["empno"];

    $sql = "DELETE FROM emp WHERE empno = '$empno'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
