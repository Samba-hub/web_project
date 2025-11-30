<?php
include 'db_connect.php'; 

$sql = "SELECT * FROM complaints"; 

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        .card { border: 1px solid #ccc; padding: 10px; margin: 10px; }
    </style>
</head>
<body>

    <h1>User List</h1>

    <div class="container">
        <?php
        if (mysqli_num_rows($result) > 0) {
            
         
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<h3>complaint id: " . $row['complaints_id'] . "</h3>";
                echo "<p>user id: " . $row['user_id'] . "</p>";
                echo "<p>complaint text: " . $row['complaint_text'] . "</p>";
                echo "</div>";
            }

        } else {
            echo "No results found in the database.";
        }
        ?>
    </div>

</body>
</html>