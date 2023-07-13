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
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];
    $deptno = $_POST["deptno"];

    $sql = "INSERT INTO emp (empno, name, address, salary, deptno)
            VALUES ('$empno', '$name', '$address', '$salary', '$deptno')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Record</title>
</head>
<body>
    <h2>Insert Record</h2>
    <form method="POST" action="insert.php">
        <label>Employee Number:</label>
        <input type="text" name="empno" required><br><br>
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Address:</label>
        <input type="text" name="address" required><br><br>
        <label>Salary:</label>
        <input type="text" name="salary" required><br><br>
        <label>Department Number:</label>
        <input type="text" name="deptno" required><br><br>
        <input type="submit" value="Insert">
    </form>
</body>
</html>
