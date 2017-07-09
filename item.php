<?php include 'include/db.php';
?>

<html>
   <head>
     <title>BeautifulWatch</title>
	  <link rel="stylesheet" href="css/font-awesome.css">
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="css/style.css">
	  <script src="js/jquery.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <style>
	    .btn{
	     font-size:30px;
		 border-radius:0;
		height:50px;
		padding-bottom:40px;}
	  </style>
   </head>
   <body>
       <?php include'include/header.php';
	 ?>
	 <div class="container">
	   <div class="row">
	    
			 <ol class="breadcrumb">
			   <li><a href="index.php">home</a></li>
			   <?php 
			        if(isset($_GET['item_id'])){
				   
		                $sql= "SELECT * FROM items WHERE item_id='$_GET[item_id]'";
			            $run= mysqli_query($conn,$sql);
			 			while($rows = mysqli_fetch_assoc($run) ){
							 $item_id=$rows['item_id'];
							echo"
							<li><a href='#'>$rows[item_cat]</a>
			                <li class='active'>$rows[item_title]</li>
							";
			   ?>
			   
			 </ol>
		</div>
		<div class="row"><?php 
				      echo"  <div class='col-md-8'>
						   <h3>$rows[item_title]</h3>
						   <img src='$rows[item_image]' class='img-responsive'>
						   <h4 class='desc'><b>Description</b></h4>
						   <div>$rows[item_desciption] </div>
		                </div>";
				 
				 
			 }
			  }
		     
		?>
		
        <aside class="col-md-4">
		   
		     
			 <a href="final.php?chk_item_id=<?php echo$item_id;?>" class="btn btn-success btn-lg btn-block">Buy</a>
			 <br>
		     <ul class="list-group">
			   <li class="list-group-item">
			   <div class="row">
			        <div class="col-md-2"><i class="fa fa-truck fa-lg"></i></div>
					<div class="col-md-10">Delivered within 5 days</div>
			    </div>
			   </li>
			   <li class="list-group-item">
			     <div class="row">
			        <div class="col-md-2"><i class="fa fa-refresh fa-lg"></i></div>
					<div class="col-md-10">Easy return within 30 days</div>
				</div>
			   </li>
			   <li class="list-group-item">
			     <div class="row">
			        <div class="col-md-2"><i class="fa fa-phone fa-lg"></i></div>
					<div class="col-md-10">Call 11545125584 for an query</div>
				</div>
			   </li>
			 </ul>
		   
		</aside>
		</div>
		<div class="page-header">
		   <h2>Related Items</h2>
		</div>
		<section class="row">
		<?php 
		        $rel_sql= "SELECT * FROM items ORDER BY rand() LIMIT 3";
                $rel_run= mysqli_query($conn,$rel_sql);	
                while($rel_rows=mysqli_fetch_assoc($rel_run)){
					$discounted_price= $rel_rows['item_price']-$rel_rows['item_discount'];
					echo"
					   <div class='col-md-3'>
						<div class='col-md-12 single-item noPadding'>
								<div class='top'>
								<img src='$rel_rows[item_image]' class='img-responsive'>
								</div>
								<div class='bottom'>
								  <h3 class='item-title'><a href='item.php?item_title=$rel_rows[item_title]& item_id=$rel_rows[item_id]'>$rel_rows[item_title]</a></h3>
								  <div class='pull-right reduced-price text-muted'><del>$$rel_rows[item_price]/-</del></div>
								  <div class='clearfix'></div>
								  <div class='pull-right discounted-price'>$$discounted_price/-</div>
								</div>
						</div>
		    </div>
					";
				}				
		?>
		   
			
		</section>
	 </div>
	 <?php include'include/footer.php';
	 ?>
   </body>
</html>