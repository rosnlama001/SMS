<?php  include_once "../include/top.php";
 include_once"../../admin/database/conn.php";
$cat=$_POST['select'];
?>
 <div class="card">
            <div class="card-header">
			                  
			                  <strong class=" ">
			                  	<a href="exam.php"><i class="mdi mdi-arrow-left"></i></a>
			                  	CATEGORY/
			                  	<?php 
			                  	$sql ="select category from category where cid='$cat' ";
			                  	$result =$conn -> query($sql);
			                  while ($row = $result -> fetch_assoc()) {echo $row['category'];}
			                  	?></strong>
			</div>
			<div class="card-body">
			                  <form class="" action="question.php" method="post">
			                  	<div class="row  d-flex justify-content-center">
			            <div class="col-10">
			                  		<div class="card">
			                  			<div class="card-header bg-info text-light">
			                  				<?php 
			                  				$i=1;
			                  				$sn=1;
			                  	$sql ="select * from questions where cid='$cat' ";
			                  	$result =$conn -> query($sql);
			                  while ($row = $result -> fetch_assoc()) {
			                  	echo "<h3>".$sn." ".$row['question']."</h3>";
			                  	$sn++;
			                  }
			                  	?>
			                  			</div>
			                  			<div class="card-body">
			                  		<?php 
			                  			$sql ="select * from answers where qid='$i' and cid='$i' ";
			                  			$result =$conn -> query($sql);
			                  			while ($row = $result -> fetch_assoc()) {
			                  				?>
									 <div class="custom-control custom-radio">
									    <input type="radio" name="ans" value=" <?php echo $row['aid'] ?>"> <?php echo $row['answer'] ?><br /><br />
									   
									 </div>
									 <?php }

			                  			?>
			                  			</div>
			                  		</div>
			             </div>
			             		</div>
			             <div class="row  d-flex justify-content-center my-3 ">
			             	<input type="submit" name="sub" class="btn btn-primary btn-lg" value="submit">
			             </div>

			 
			                  </form>
			</div>
  </div>


<?php include_once "../include/footer.php"; ?>