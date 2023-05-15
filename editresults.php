<?php include('adminheader.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST["submit"]) && !empty($_FILES["file"]["tmp_name"])) {
    $email = $_POST['email'];
    // Get file details
  $fileName = $_FILES['file']['name'];
  $fileType = $_FILES['file']['type'];
  $filedata = addslashes(file_get_contents( $_FILES['file']['tmp_name']));

  // Prepare and execute SQL statement to insert file into database
  $sql = "INSERT INTO results (email, filename, type, content) VALUES ('$email','$fileName', '$fileType', '$filedata')";
  if (mysqli_query($connection, $sql)) {
    echo "File uploaded successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
  }}
?>

<section>
<center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label style="font-weight: bold;">Enter user email address:</label><br>
    <input type="text" name="email" required><br><br>
    <label for="file" style="font-weight: bold;">Choose a file:</label><br>
    <input type="file" name="file" id="file" required><br><br>
    <input class="butn" type="submit" name="submit" value="Upload">
  </form>
</center>
</section>