
<table width="795" align="center" bgcolor="pink">

     <tr align="center">
	    <td colspan="6"><h2>View All Customers Here</h2></td>
     </tr>


	 <tr align="center" bgcolor="skyblue">
	    <th>S.N</th>
	    <th>Name</th>
	     <th>Email</th>
		 <th>Password</th>
		 <th>Address</th>
		 <th>Phone</th>
		 
		 <th>Delete</th>
	 
	 </tr>
	 <?php
	 include("includes/db.php");
	 
	 $get_c="select * from customer";
	 $run_c=mysqli_query($con,$get_c);
	 
	 $i=0;
	 while($row_c=mysqli_fetch_array($run_c)){
		 $c_id=$row_c['customer_id'];
		 $c_email=$row_c['customer_email'];
		 $c_password=$row_c['customer_password'];
		 $c_name=$row_c['customer_name'];
		 $c_address=$row_c['address'];
		 $c_phone=$row_c['phone'];
		 
		 $i++;
	 
	 ?>
	 
	 <tr align="center">
	     <td><?php echo $i;?></td>
		 <td><?php echo $c_name;?></td>
		 <td><?php echo $c_email;?></td>
		 <td><?php echo $c_password;?></td>
		 <td><?php echo $c_address;?></td>
		 <td><?php echo $c_phone;;?></td>
		 <td><a href="delete_c.php?delete_c=<?php echo $c_id;?>">Delete</a></td>
	 </tr>
	 <?php } ?>
	 

</table>