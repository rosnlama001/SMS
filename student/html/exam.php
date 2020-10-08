<?php
  include_once "../include/top.php";
  include_once"../../admin/database/conn.php";
?>

   <div class="card">
            <div class="card-header">
			                  <a href="teachers.php"><i class="fa fa-arrow-left"></i></a>
			                  <strong class="ml-5 ">Select category for Exam</strong>
			</div>
			<div class="card-body">
			                  <form class="" action="question.php" method="post">
			                  	<div class="row  d-flex justify-content-center">
			            <div class="col-10">
			                  		<select class="custom-select custom-select-lg" name="select">
			                  			<option value="">Choose subject</option>
			                  			<?php 
			                  			$sql ="select * from category ";
			                  			$result =$conn -> query($sql);
			                  			while ($row = $result -> fetch_assoc()) {
			                  				?>
			                  			
			                  			<option value="<?php echo $row['cid'] ?>"><?php echo $row['category'] ?></option>
			                  			
			                  			<?php }
			                  			?>
			                  		</select>
			             </div>
			             		</div>
			             <div class="row  d-flex justify-content-center my-3 ">
			             	<input type="submit" name="sub" class="btn btn-primary btn-lg" value="submit">
			             </div>

			 
			                  </form>
			</div>
  </div>

<?php include_once "../include/footer.php"; ?>