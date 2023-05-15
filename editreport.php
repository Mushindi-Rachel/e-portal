<?php include_once('adminheader.php');
error_reporting(0);

$connection;

$email= $_POST['email'];
$title= $_POST['title'];
$description= $_POST['description'];
$academics= $_POST['academics'];
$behaviour= $_POST['behaviour'];
$activities= $_POST['activities'];
$date= $_POST['date'];  
$sql = "INSERT INTO reports (title, description, academics, behaviour, activities, date) VALUES('$title', '$description', '$academics', '$behaviour', '$activities', '$date')";
if ($connection->query($sql)=== TRUE){
echo "<script>alert('Reports updated successfully');</script>";
}
else{
"Error: ".$sql. "<br>".$connection->error;
}
?>
<center>
<section>
<form action="editreport.php" method="post">
<label>Enter Parent's email:</label><br> 
        <input type="email" name="email"><br><br>
       <label>Report Title:</label><br> 
        <input type="text" name="title"><br><br>
        <label>Description:</label><br>
        <textarea name="description" style="width: 30%; height: 20px;"></textarea><br><br>
        <label>Academics:</label><br>
        <textarea name="academics" style="width: 30%; height: 20px;"></textarea><br><br>
        <label>Behaviour:</label><br>
        <textarea name="behaviour" style="width: 30%; height: 20px;"></textarea><br><br>
        <label>Activities:</label><br>
        <textarea name="activities" style="width: 30%; height: 20px;"></textarea><br><br>
        <label>Date:</label> <br>
        <input type="date" name="date"><br><br>
        <button class="butn">Post Report</button>
    </form>
</section>
</center>
