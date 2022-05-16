<?php
$showAlert=false;
$showError=false;
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
else{
    include 'dbconnect.php';


    $roll_no=$_GET['roll_no'];

   $delete_student="delete from student  where roll_no='$roll_no'";


	  $sql3=mysqli_query($conn,$delete_student);
if($sql3)
	  { 
		  $showAlert=true;
      header('location:list.php');
		 
	  }
	  else
	  {
		  //$showError=true;
		 
	  }
}



?>