<?php
$fname='';
$lname='';
$email='';
$mobile='';
$pdf_name='';
include("includes/connect.php");
if(isset($_POST['submit'])){
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
  $email=$_POST['emailid'];
  $mobile= $_POST['mobileNo'];
	$pdf_name=$_FILES['image']['name'];
	$pdf_size=$_FILES['image']['size'];
	$pdf_tmp=$_FILES['image']['tmp_name'];

	 if($fname ==''  or $lname=='' or $email=='')
	 {
		echo"<script> alert('feild is empty')</script>";
		exit();
   }
		if($pdf_size<=100000)
		{
		move_uploaded_file($pdf_tmp,"img/Resumes/$pdf_name");
		}
		else
		{
		echo "<script>alert ('file is larger,only 100kb is allowed')</scrript>";
	        }
     }
	     $query="select * from form where file='$pdf_name'";
		 $run=mysqli_query($con,$query);

	      if (mysqli_num_rows($run) > 0) 
	      {
	    	echo"<script>alert('')</script>";
		   echo"<script>alert('Your Application Already exists')</script>";
		   echo"<script>window.open('career.php','_self')</script>";
		 }
		 else
		 {
		
	       $query="INSERT INTO `form`(`f_name`, `l_name`, `email`, `mobile`, `file`) VALUES ('$fname','$lname','$email','$mobile','$pdf_name')";
	      if(mysqli_query($con,$query))
	      {
			echo"<script>alert('')</script>";
		   echo"<script>alert('Your Application has been submitted successfully')</script>";
		   echo"<script>window.open('career.php','_self')</script>";
	       }
	
		 }
?>