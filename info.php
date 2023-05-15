<?php include('header.php');

$email = $_SESSION['email'];
 $connection;
    // Select data from table table_employee
    $sql = "SELECT * FROM userss WHERE email = '$email'";

    $result = mysqli_query($connection, $sql);
?>
<section>

    <center>
    <div class="container">
      
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">Details</th>
			</tr>
			</thead>
			<tbody>
            <table border="0" cellspacing="2" cellpadding="2"> 
            <?php 
           
           if (mysqli_num_rows($result) == 1) {
            // Fetching the details of the user
            $row = mysqli_fetch_assoc($result);
    
                echo '<tr>
                <th>Name: </th>'
                .'<td>' . $row["name"] . "<br>";'</td>'.
                '</tr>';
                echo '<tr>
                <th>Gender: </th>'
                .'<td>'.$row["gender"].'</td>'.
                '</tr>';
                echo '<tr><th>Age: </th>' 
                .'<td>'.$row["age"].'</td>'.
                '</tr>';
                echo '<tr>
                <th>Email: </th>'
                .'<td>'.$row["email"].'</td>'.
                '</tr>';
                echo '<tr>
                <th>Contact: </th>'
                .'<td>'.$row["contact"].'</td>'.
                '</tr>';
                echo '<tr>
                <th>Class: </th>'
                .'<td>'.$row["class"].'</td>'.
                '</tr>';
                echo '<tr>
                <th>Interest: </th>'
                .'<td>'.$row["interest"].'</td>'.
                '</tr>';

                         
                          
			
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
    
    </center>
</section>
 