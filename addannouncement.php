<?php include_once('adminheader.php');
$connection;

$title= $_POST['title'];
$description= $_POST['description'];
$date= $_POST['date'];  
$sql = "INSERT INTO announcements (title, description, date) VALUES('$title', '$description', '$date')";
if ($connection->query($sql)=== TRUE){
echo "<script>alert('Announcements updated successfully');</script>";
}
else{
"Error: ".$sql. "<br>".$connection->error;
}
?>
<section>
<form action="addannouncement.php" method="post">
       <label>Title:</label><br> 
        <input type="text" name="title"><br><br>
        <label>Description:</label><br>
        <textarea name="description" style="width: 30%;"></textarea><br><br>
        <label>Date:</label> <br>
        <input type="date" name="date"><br><br>
        <button class="add-button">Add Announcement</button>
    </form>
</section>