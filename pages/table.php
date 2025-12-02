<?php
session_start();
require_once '../db_connect.php';

$user_id = $_SESSION["user_id"];







?>







<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8" >
    <meta name="author" content="Ultimate Life Form" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Table</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/print.css" media="print">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation bar -->
         
        <?php include '../includes/navbar.php'; ?>
        <h1>Table Page</h1>
        <table class="Table">
    <caption>Your forms</caption>

<?php 
$sql = "SELECT * FROM form WHERE user_id = '$user_id'; ";

$result = mysqli_query($conn,$sql);

if($result){

if(mysqli_num_rows($result) > 0){
echo "<tr>";
echo "<th>user_id</th>";
echo "<th>sell_or_buy</th>";
echo "<th>game_name</th>";
echo "<th>quantity</th>";
echo "<th>price</th>";
echo "<th>game_condition</th>";
echo "<th>feedback</th>";


echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";

echo "<td>" . $row["user_id"] . "</td>";
echo "<td>" . $row["sell_or_buy"] . "</td>";
echo "<td>" . $row["game_name"] . "</td>";
echo "<td>" . $row["quantity"] . "</td>";
echo "<td>" . $row["price"] . "</td>";
echo "<td>" . $row["game_condition"] . "</td>";
echo "<td>" . $row["feedback"] . "</td>";



echo "</tr>";



}


    
}

else{

echo "There is no forms that you have submitted";

}






}
else{
    echo "Error: Could not execute your SQL".mysqli_error($conn);
}


?>


   
</table>
        <?php include '../includes/footer.php'; ?>
    </body>

</html>