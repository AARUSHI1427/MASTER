<?php session_start();
include "include/db.php";
if(isset($_GET['chk_item_id'])){
	$date= date('Y-m-d h:i:s');
	$rand_num= mt_rand();
	if(isset($_SESSION['ref'])){
		
	}else{
		$_SESSION['ref']=$date.'_'.$rand_num;
	}
	
	$chk_sql="INSERT INTO checkout (chk_item, chk_ref, chk_timing) VALUES ('$_GET[chk_item_id]', '$_SESSION[ref]','$date')";
	$chk_run= mysqli_query($conn, $chk_sql);
}
?>

<html>
   <head>
     <title>Cart</title>
	   <link rel="stylesheet" href="css/bootstrap.css">
	   <link rel="stylesheet" href="css/font-awesome.css">
	   <link rel="stylesheet" href="css/style.css">
	   <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.js"></script>
	   <script>
	     function ajax_func(){
			xml1= new XMLHttpRequest();
			xml1.onreadystatechange= function() {
				if(xml1.readyState == 4 && xml1.status == 200){
					document.getElementById('modified').innerHTML=xml1.responseText;
				}
			}
			xml1.open("GET","final_pro.php",true);
			xml1.send();
			
		 }
	   </script>
    </head>
   <body onload="ajax_func();">
     <?php include'include/header.php';
	 ?>
	 <div class="container">
	    <div class="page-header">
		  <h2 class="pull-left">Checkout</h2>
		  <div class="pull-right"><button class="btn btn-success" data-toggle="modal" data-target="#modal1">Proceed</button></div>
		  <div class="modal fade" id="modal1" >
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
			<div class="clearfix"></div>		  
		</div>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Order Detail</div> 
			<div class="panel-body">
			  <table class="table">
			      <thead>
				     <tr>
					    <th>S.No</th>
						<th>Item</th>
						<th>Quantity</th>
						<th width="5%">Delete</th>
						<th class="text-right">Price</th>
						<th class="text-right">Total</th>
						
					 </tr>
				  </thead>
				  <tbody id="modified">
				     <!--process-->
					 
				    
				  </tbody>
			  </table>
			  
			  <table class="table">
			     <thead>
				    <tr>
					  <th class="text-center" colspan="2">Order Summary</th>
					</tr>
				 </thead>
				 <tbody>
				    <tr>
					  <td>Subtotal</td>
					  <td class="text-right">850$</td>
					</tr>
					<tr>
					  <td>Delivery Charges</td>
					  <td class="text-right">Free</td>
					</tr>
					<tr>
					  <td>Grand Total</td>
					  <td class="text-right">850$</td>
					</tr>
				 </tbody>
			  </table>
			</div> 
		</div>
	 
	 </div>
	 
	 
	 <?php include'include/footer.php';
	 ?>
	 
      
   </body>

</html>