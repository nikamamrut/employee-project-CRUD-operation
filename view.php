<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>
</head>
<body>
    <h2>View Records</h2>
    <table>
        <tr>
            <th>Employee Number</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Department Number</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM emp";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["empno"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td>" . $row["deptno"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No records found.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
