<?php
// Include database connection settings
include('settings.php');

// Connect to MySQL database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch archers data from database
$sql = "SELECT ArcherID, FirstName, LastName, Gender, DateOfBirth FROM archers ORDER BY ArcherID ASC";
$result = $conn->query($sql);

// Display table if data is found
if ($result->num_rows > 0) {
    echo '<table border="1">
            <tr>
                <th>ArcherID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>DateOfBirth</th>
            </tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['ArcherID'] . '</td>
                <td>' . $row['FirstName'] . '</td>
                <td>' . $row['LastName'] . '</td>
                <td>' . $row['Gender'] . '</td>
                <td>' . $row['DateOfBirth'] . '</td>
            </tr>';
    }

    echo '</table>';
} else {
    echo "No data found in the archers table.";
}

// Close database connection
$conn->close();
?>
