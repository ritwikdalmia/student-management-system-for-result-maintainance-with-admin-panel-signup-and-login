<?php
 session_start();

$showAlert=false;
$showError=false;

 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
     header("location:login.php");
     exit;
 }
 else{
    
 include "dbconnect.php";
}

?>

	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>List </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require 'trial.php' ?>


    

    
    
<br><br><br>

<div class="container">
		<div class="main-body">
            <!--list product-->

			<div class="row">
                <!--fetch product-->
                <?php
                                
                $select_display= "select * from student" ;
                $sql1 = mysqli_query($conn,$select_display);
                while($row=mysqli_fetch_assoc($sql1)){
                        $roll_no=$row['roll_no'];
                        $full_name=$row['full_name'];
                        $class=$row['class'];
                       
                        $marks=$row['marks'];
                        $grade=$row['grade'];
                        echo "<div class='col-lg-4'>
                    
                        <div class='card' style='box-shadow: 0 0 0px rgb(0 0 0) !important;'>
                            <div class='card-body'>
                                <div class='d-flex flex-column align-items-center text-center'>
                                    <img src='https://bootdey.com/img/Content/avatar/avatar6.png' alt='Admin' class='rounded-circle p-1 bg-primary' width='110'>
                                    <div class='mt-3'>
            
                                         <h4>Roll No : &nbsp $roll_no</h4>
                                        <p class='text-secondary mb-1'>Name : &nbsp $full_name</p>
                                        <p class='text-secondary mb-1'>Class : &nbsp $class</p>
                                        <p class='text-secondary mb-1'>Marks : &nbsp$marks</p>
                                        <p class='text-secondary mb-1'>Grade : &nbsp  $grade</p>
                                        
								
                                        <a class='btn btn-primary' href='update.php?roll_no=$roll_no'>Edit</a>
                                        <a class='btn btn-danger' href='delete.php?roll_no=$roll_no'>delete</a>
							
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>";


                }
                ?>
				
				
		</div>
	</div>

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>