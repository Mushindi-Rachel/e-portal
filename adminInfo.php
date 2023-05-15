<?php include_once('adminheader.php');
// select query
$select = "SELECT * FROM admins";
$result = $connection->query($select);
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
           
            while($row = $result->fetch_object()){
                echo '<tr>
                <th>Name</th>'
                .'<td>'.$row->name.'</td>'.
                '</tr>'.
                '<tr>
                <th>Gender  </th>'
                .'<td>'.$row->gender.'</td>'.
                '</tr>'.'
                <tr><th>Title  </th>' 
                .'<td>'.$row->title.'</td>'.
                '</tr>'.
                '<tr>
                <th>Email  </th>'
                .'<td>'.$row->email.'</td>'.
                '</tr>'.
                '<tr>
                <th>Contact  </th>'
                .'<td>'.$row->contact.'</td>'.
                '</tr>'.
                '<tr>';

                         
                          
			
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
    
</center>
</section>