<?php include('header.php');
$email = $_SESSION['email'];

$select = "SELECT * FROM reports where email = '$email'";
$result = $connection->query($select);


?>
<center>
<section style="width: 50%;">
<div>
<?php
while($row = $result->fetch_object()){
    echo '<div class="report">';
    echo '<h1>'.$row->title.'</h1>';
    echo '<h3>'.$row->description.'</h3>';
    echo '<h2>Academics: </h2>';
    echo '<h3>'.$row->academics.'</h3>';
    echo '<h2>Behavior: </h2>';
    echo '<h3>'.$row->behaviour.'</h3>';
    echo '<h2>Activities: </h2>';
    echo '<h3>'.$row->activities.'</h3>';
    echo '<h4>'.$row->date.'</h4>';
    echo '</div>';}

?>

</section>