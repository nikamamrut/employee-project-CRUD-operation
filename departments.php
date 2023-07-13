<!DOCTYPE html>
<html>
<head>
    <title>Display Department Number</title>
</head>
<body>
    <h2>Display Department Number</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT deptno FROM emp";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["deptno"] . "<br>";
        }
    } else {
        echo "No department numbers found.";
    }

    $conn->close();
    ?>
</body>
</html>
