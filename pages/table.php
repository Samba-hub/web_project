<?php
session_start();

//Secure Design
if (!isset($_SESSION["user_id"])) {
    header("Location: /final_project/pages/register.php");
    return;
}

require_once '../db_connect.php';

$user_id = $_SESSION["user_id"];
//Form table SQL Injection
$stmt_form= mysqli_prepare($conn, "SELECT user_id,user_name,email, sell_or_buy, game_name,quantity,price, game_condition,feedback,terms_of_Service,use_of_Data FROM form where user_id = ?");
mysqli_stmt_bind_param($stmt_form,"i",$user_id);
mysqli_stmt_execute($stmt_form);
$result_form = mysqli_stmt_get_result($stmt_form);

//Complaint Table SQL Injection
$stmt_con = mysqli_prepare($conn, "SELECT complaints_id, complaint_text FROM complaints WHERE user_id = ?");
mysqli_stmt_bind_param($stmt_con,"i",$user_id);
mysqli_stmt_execute($stmt_con);
$result_con = mysqli_stmt_get_result($stmt_con);
include "../includes/logging.php";



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
        <?php include '../includes/log_btn.php'; ?>
        <h1>Table Page</h1>

        <table class="Table">
    <caption>Your forms</caption>

<?php 
//$sql = "SELECT * FROM form WHERE user_id = '$user_id'; ";

//$result = mysqli_query($conn,$sql);


if($result_form){
$row_counter = mysqli_num_rows($result_form);   
if($row_counter > 0){
echo "<tr>";
echo "<th>user id</th>";
echo "<th>user name</th>";
echo "<th>email</th>";
echo "<th>sell or buy</th>";
echo "<th>game name</th>";
echo "<th>quantity</th>";
echo "<th>price</th>";
echo "<th>game condition</th>";
echo "<th>feedback</th>";
echo "<th>Term Of Service</th>";
echo "<th>Use of Data</th>";

echo "</tr>";
$first_row = true;
while($row = mysqli_fetch_array($result_form)){
echo "<tr>";

if($first_row){
  echo "<td rowspan=\"$row_counter\">" .  $row["user_id"] . "</td> ";  
  $first_row = false;
}


echo "<td>" . $row["user_name"] . "</td>";

echo "<td>" . $row["email"] . "</td>";

echo "<td>" . $row["sell_or_buy"] . "</td>";
echo "<td>" . $row["game_name"] . "</td>";
echo "<td>" . $row["quantity"] . "</td>";
echo "<td>" . $row["price"] . "</td>";
echo "<td>" . $row["game_condition"] . "</td>";
echo "<td>" . $row["feedback"] . "</td>";
echo "<td>" . $row["terms_of_Service"]. "</td>";
echo "<td>" . $row["use_of_Data"] . "</td>";



echo "</tr>";



}
echo "<tr><td colspan=\"11\"> This is all The Forms</td> </tr>";

    
}

else{

echo "<tr><td>You have not submitted any Forms</td></tr>";

}





}

else{
    echo "Error: Could not execute your SQL".mysqli_error($conn);
}


?>


   
</table>

<!---<br>-->

<table class="Table">
    <caption>Your Complaints</caption>

<?php 

if($result_con){
$con_counter = mysqli_num_rows($result_con);
if($con_counter > 0){
echo "<tr>";
echo "<th>complaints_id</th>";
echo "<th>complaint</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result_con)){
echo "<tr>";

echo "<td>" . $row["complaints_id"] . "</td>";
echo "<td>" .$row["complaint_text"] . "</td>";



echo "</tr>";


}
echo "<tr><td colspan=\"2\"> This is all The Complaints</td> </tr>";

    
}

else{

echo "<tr><td>There is no  Complaints that you have submitted</td></tr>";

}





}

else{
    echo "Error: Could not execute your SQL".mysqli_error($conn);
}


?>


   
</table>

<br>
<button onclick="window.print()">Print</button>
        <?php include '../includes/footer.php'; ?>
    </body>

</html>