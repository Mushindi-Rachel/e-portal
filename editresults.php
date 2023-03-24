<?php include_once('adminheader.php');

$admission_no = $_POST['admission_no'];
$admission_no = stripcslashes($admission_no);
$admission_no = mysqli_real_escape_string($connection, $admission_no);

$sql = "SELECT * from results where admission_no='$admission_no'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1){
    $subject= $_POST['subject'];
    $points= $_POST['points'];
    $grade= $_POST['grade'];  
    $sql = "INSERT INTO results (subject, points, grade) VALUES('$subject', '$points', '$grade')";
if ($connection->query($sql)=== TRUE){
    echo "<script>alert('Results updated successfully');</script>";
}
else{
    "Error: ".$sql. "<br>".$connection->error;
}
    


$connection->close();
}
?>


<section>

            <div class="details">
                <form class="DetailForm" action="editresults.php" method="post">
                    <label class="form">Admission_no:</label><br>
                    <input type="text" name="admission_no"><br><br>
                    <label class="form">Subject:</label><br>
                    <input type="text" name="subject"><br><br>
                    <label class="form">Points:</label><br>
                    <input type="text" name="points"><br><br>
                    <label class="form">Grade:</label><br>
                    <input type="text" name="grade"><br><br>

                    <button class="add-button">Save Results</button>

                </form>
            </div>
        </section>