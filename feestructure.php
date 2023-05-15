<?php 
include('header.php');



if(isset($_GET['id'])){

      $sql="SELECT type, content from feestructure where id = ?";
      $query=$connection->prepare($sql);
      $query->bind_param("i", $_GET['id']);
      $query->execute() or die("Error: problem on retrieving file! ");
      $result = $query->get_result();

      $row = $result->fetch_assoc();
      header(" Content-type: ".$row["type"]);
      echo $row["content"];
}
      ?>
      <section>
<embed src = "E-SCHOOL.pdf?id=<?php echo $row["id"];?> " style="width: 60%;height: 800px;" >

<button><a href="files\feeStructure\E-SCHOOL.pdf" Download class="fa fa-download">Download Fee Structure</a></button>
      </section>