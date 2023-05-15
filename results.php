<?php
include('header.php');
error_reporting(0);


$email = $_SESSION['email'];

$sql = "SELECT content FROM results WHERE email = '$email'";
$result = $connection->query($sql);
$row = mysqli_fetch_assoc($result);

// Set the content type to "application/pdf"
header('Content-Type: application/pdf');

// Set the content disposition to "attachment" and specify a filename for the PDF file
header('Content-Disposition: attachment; filename="ResultsSlip.pdf"');

// Close any open output buffers
while (ob_get_level()) {
    ob_end_clean();
}

// Output the PDF file to the browser
echo $row['content'];

$connection->close();
?>






<section>
<button><a href="files\ResultsSlip.pdf" Download class="butn" >Download Results Slip
<img src="images\download icon - Google Search_files\download-icon-black-simple-design-260nw-1715072377.jpg" style="width:30px; height:30px;">
</a>
</button>
</section>