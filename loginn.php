<?php include_once('config.php');
$_SESSION['user'] = "  ";
$email = $_POST['email'];
$password = $_POST['password'];
 

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

$sql = "select * from userss where email='$email' and password='$password'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if (mysqli_num_rows($result) == 1) {

    
    header('location: header.php');

}
else{


$sql = "select * from admins where email='$email' and password='$password'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1){

    header('location: adminheader.php');

}
else{
echo "<script>alert('Invalid login details');</script>";
}
}
?>
