 <?php include('header.php');?>
 
 <?php include('dbcon.php');?>
 


 <div class="box1">
  <input type="text" id="searchInput" placeholder="Search...">
 <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
 style="margin-top:5px; margin-bottom:15px; background-color:green; float:left; ">ADD CLIENT</button>
 <!-- Data Browse -->
  </div>
 
 <table class="table table-hover table-borderd table-striped sticky-header" >
	<thead>
		<tr>
			<!--<th>ID</th>-->
			<th>Name</th>
			<th>IIG</th>
			<th>GGC</th>
			<th>FNA</th>
			<th>CDN</th>
			<th>NIX</th>
			<th>NOTE</th>
			<th>Activation Date</th>
			<th>ACTION</th>
		</tr>
		<tbody>
	<?php
    // Include config file
    require_once "dbcon.php";

    // Attempt select query execution
    //$query = "SELECT * FROM clients";
	// Attempt select query execution with ORDER BY clause
    $query = "SELECT * FROM clients ORDER BY name ASC"; 
    $result = mysqli_query($link, $query);

    if (!$result) {
        // Query failed, display error message
        die("Query Failed: " . mysqli_error($link));
    } else {
        // Check if there are rows returned
        if (mysqli_num_rows($result) > 0) {
            // Loop through each row in the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Output the data for each row
                echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['iig'] . "</td>";
                echo "<td>" . $row['ggc'] . "</td>";
                echo "<td>" . $row['fna'] . "</td>";
                echo "<td>" . $row['cdn'] . "</td>";
                echo "<td>" . $row['nix'] . "</td>";				
                echo "<td>" . $row['note'] . "</td>";
				echo "<td>" . $row['ac_date'] . "</td>";
				

				//insert/update/delete-sing
				  echo "<td>";
                  echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                  echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                  echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                  echo "</td>";

                echo "</tr>";
            }
        } else {
            // No rows found
            echo "<tr><td colspan='9'>No data found</td></tr>";
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Close connection
    mysqli_close($link);
?>
	

		</tbody>
	</thead>
 </table>
 
 <?php
	if(isset($_GET['message'])){
		echo"<h6>".$_GET['message']."<h6>";
	}
 ?>
  <?php
	if(isset($_GET['insert_msg'])){
		echo"<h6>".$_GET['insert_msg']."<h6>";
	}
 ?>
 
 <!-- Modal -->
 <form action="client-insert.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> ADD CLIENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
			<div class="form-group">
				<label for="f_name">Name</label>
				<input type="text" name="f_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_iig">IIG</label>
				<input type="text" name="f_iig" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_ggc">GGC</label>
				<input type="text" name="f_ggc" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_fna">FNA</label>
				<input type="text" name="f_fna" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_cdn">CDN</label>
				<input type="text" name="f_cdn" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_nix">NIX</label>
				<input type="text" name="f_nix" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_note">Note</label>
				<input type="text" name="f_note" class="form-control">
			</div>
			<div class="form-group">
				<label for="f_ac_date">Activation Date</label>
				<input type="text" name="f_ac_date" class="form-control">
			</div>
			

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_client" value="ADD">
      </div>
    </div>
  </div>
</div>

</form>

  <?php include('footer.php')?>