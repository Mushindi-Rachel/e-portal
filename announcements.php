<?php include('header.php');

$select = "SELECT * FROM announcements";
$result = $connection->query($select);
?>

<section>
<center>
<section style="width: 50%;">
<?php
while($row = $result->fetch_object()){
    echo '<div class="report">';
    echo '<h1>'.$row->title.'</h1>';
    echo '<h3>'.$row->description.'</h3>';
    echo '<h4>'.$row->date.'</h4>';}
    ?>
</section>