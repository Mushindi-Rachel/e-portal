<?php include_once('adminheader.php');
error_reporting(0);

$connection;

    $admission_no= $_POST['admission_no'];
    $name= $_POST['name'];
    $gender= $_POST['gender'];  
    $age= $_POST['age'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $contact= $_POST['contact'];  
    $img_url= $_POST['img_url'];
    $class= $_POST['class'];
    $from_year= $_POST['from_year']; 
    $to_year= $_POST['to_year'];
    $interest= $_POST['interest']; 
    $sql = "INSERT INTO userss (admission_no, name, gender, age, email, password, contact, img_url, class, from_year, to_year, interest) VALUES('$admission_no', '$name', '$gender', '$age', '$email', '$password', '$contact', '$img_url', '$class', '$from_year', '$to_year', '$interest')";
if ($connection->query($sql)=== TRUE){
    echo "<script>alert('User added successfully');</script>";
}
else{
    "Error: ".$sql. "<br>".$connection->error;
}

?>
<section style="margin-left: 30%; padding: 20px;">

<div class="form">
    <form id="form" action="addUser.php" method="post">
        <label class="form">Admission Number: </label><br>
        <input type="text" name="admission_no"><br><br>
        <label class="form">Name: </label><br>
        <input type="text" name="name"><br><br>
        <label class="form">Gender: </label><br>
        <input type="text" name="gender"><br><br>
        <label class="form">Age: </label><br>
        <input type="text" name="age"><br><br>
        <label class="form">Email address:</label><br>
        <input type="email" name="email"><br><br>
        <label class="form">Password:</label><br>
        <input type="text" name="password"><br><br>
        <label class="form">Contact:</label><br>
        <input type="tel" name="contact"><br><br>
        <label class="form">Image: </label><br>
        <input type="text" name="img_url"><br><br>
        <label class="form">Class:</label><br>
        <input type="text" name="class"><br><br>
        <label class="form">from_year:</label><br>
        <input type="text" name="from_year"><br><br>
        <label class="form">to_year:</label><br>
        <input type="text" name="to_year"><br><br>
        <label class="form">Interest:</label><br>
        <input type="text" name="interest"><br><br>
         <button style="float: right;" class="butn" >Add User</button>
</form>
</div>
</section>
