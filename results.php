<?php include_once('header.php');
//Select query 
$select = "SELECT * FROM userss";
$result = $connection->query($select);
?>


<center>
    <div class="container">
      
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">Results</th>
			</tr>
            <i>
            <?php
            while($row = $result->fetch_object()){
                echo '<tr>
                <td>Name: </td>'
                .'<td>'.$row->name.'</td>'.
                '</tr>';}
                ?>
                    </i>
			</thead>
			<tbody>
            <table border="0" cellspacing="2" cellpadding="2"> 
            <?php 
           
            while($row = $result->fetch_object()){
                echo '<tr>
                <th>Subject</th>
                <th>Points</th>
                <th>Grade</th>
                </tr>'.
                '<tr>'
                .'<th>'.$row->subject.'</th>'
                .'<th>'.$row->subject.'</th>'
                .'<th>'.$row->subject.'</th>'
                .'</tr>';

                
                
                
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div>
</center>