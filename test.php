        <html>
		<head>
     <title>Cart</title>
	   <link rel="stylesheet" href="css/bootstrap.css">
	   <link rel="stylesheet" href="css/font-awesome.css">
	   <link rel="stylesheet" href="css/style.css">
	   <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.js"></script>
    </head>
	<body>
		<button class="btn btn-success" data-toggle="modal" data-target="#modal1">Proceed</button>
		
		<div class="modal fade" id="modal1">
		    <div class="modal-dialog">
			  <div class="modal-content">
	
		<div class="modal-header">Header</div>
			   <div class="modal-body">
			       <form>
				      <div class="form-group">
					    <label for="name">Name</label>
						<input type="text" id="name" class="form-control" placeholder="Full Name"></input>
						
					  </div>
					  <div class="form-group">
					    <label for="email">Email Address</label>
						<input type="email" id="email" class="form-control" placeholder="Email"></input>
						
					  </div>
					  <div class="form-group">
					    <label for="contact">Contact Number</label>
						<input type="text" id="contact" class="form-control" placeholder="Contact Number"></input>
						
					  </div>
				   </form>
			   </div>
			   <div class="modal-footer">Footer</div>
			  </div>
			</div>
		  </div>
		  <?php
		  echo"ghhh<div class='col-md-8'>
						   <h3>$rows[item_title]</h3>
						   <img src='images/New Folder/watch2.jpg' class='img-responsive'>
						   <h4 class='desc'><b>Description</b></h4>
						   <div>$rows[item_description] </div>
		                </div>";
		  
		  ?>
		  </body>
		  </html>