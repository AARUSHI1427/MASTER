<?php session_start();
                 include "include/db.php";
                      $c=1;
				  
				      //$chk_sel_sql = "SELECT * FROM checkout  chk_ref='$_SESSION[ref]'";
					  $chk_sel_sql = "SELECT * FROM checkout c JOIN items i ON c.chk_item=i.item_id WHERE c.chk_ref='$_SESSION[ref]'";
					  $chk_sel_run = mysqli_query($conn,$chk_sel_sql);
					  
					  while($chk_sel_rows=mysqli_fetch_assoc($chk_sel_run)){
						  $discounted_price= $chk_sel_rows['item_price']-$chk_sel_rows['item_discount'];
						  
						  echo"
						     <tr>
								   <td>$c</td>
								   <td>$chk_sel_rows[item_title]</td>
								   <td>1.</td>
								   <td><button class='btn btn-danger'>Delete</button></td>
								   <td class='text-right'>$discounted_price$</td>
								   <td class='text-right'>100$</td>
					   
					</tr>
					     
						  ";
						  $c++;
					
					  }
				  ?>