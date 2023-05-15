<?php include('adminheader.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if a file was uploaded
if (isset($_FILES['file'])) {
  // Get the uploaded file contents into a variable
  $content = file_get_contents($_FILES['file']['tmp_name']);

  // Escape special characters in the PDF content
  $content = mysqli_real_escape_string($connection, $content);

  // SQL query to insert the PDF file into the database table
  $sql = "INSERT INTO feestructure (filename, type, content) 
          VALUES ('".$_FILES['file']['name']."', '".$_FILES['file']['type']."', '$content')";

  // Execute the query
  if ($connection->query($sql) === TRUE) {
    echo "PDF file inserted successfully.";
  } else {
    echo "Error inserting PDF file: " . $connection->error;
  }
}}

?>

<section>
<center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label for="file" style="font-weight: bold;">Choose a file:</label><br>
    <input type="file" name="file" id="file" required><br><br>
    <input class="butn" type="submit" name="submit" value="Upload">
  </form>
</center>
</section>
