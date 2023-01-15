<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];
//data base connection
$conn = new mysqli('localhost', 'root', '', 'registersargam');
if($conn->connect_error)
{
    die('connection failed: ' .$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into registration(username,email,password,Cpassword) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss" , $username, $email, $password, $Cpassword);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>