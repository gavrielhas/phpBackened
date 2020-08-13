<?php 
/*
include('db_connect.php');
*/
  header('Access-Control-Allow-Origin: *');

// Check connection
$servername = "localhost";
$username   = "gavriel1";
$password   = "Gavriel2908";
$dbname     = "FormData";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO Addresses (title, amount,price)
        VALUES ('".$_POST['title']."', '".$_POST['amount']."', '".$_POST['price']."')";
    if (mysqli_query($conn,$sql,$sqlCart)) {
    $data = array("data" => "You Data added successfully");
        echo json_encode($data);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

/*
// write query for all adresses
$sql = 'SELECT ID, email, fname, lname, SpecialReq FROM Addresses'; //Addresses is the table name

// make query & get result
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));;

// fetch the resulting rows as an array
$Addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

print_r($Addresses);
*/

?>