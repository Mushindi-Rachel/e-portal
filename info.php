<?php include('header.php');

$email = $_SESSION['user'];
 $connection;
    // Select data from table table_employee
    $sql = "SELECT * FROM userss WHERE email = '$email'";

    $result = mysqli_query($connection, $sql);
?>


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
                <th>Name</th>'
                .'<td>' . $row["name"] . "<br>";'</td>'.
                '</tr>'.
                '<tr>
                <th>Gender  </th>'
                .'<td>'.$row["gender"].'</td>'.
                '</tr>'.'
                <tr><th>Age  </th>' 
                .'<td>'.$row["age"].'</td>'.
                '</tr>'.
                '<tr>
                <th>Email  </th>'
                .'<td>'.$row["email"].'</td>'.
                '</tr>'.
                '<tr>
                <th>Contact  </th>'
                .'<td>'.$row["contact"].'</td>'.
                '</tr>'.
                '<tr>
                <th>Class  </th>'
                .'<td>'.$row["class"].'</td>'.
                '</tr>'.
                '<tr>
                <th>Interest  </th>'
                .'<td>'.$row["interest"].'</td>'.
                '</tr>';

                         
                          
			
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
    
    </center>
 