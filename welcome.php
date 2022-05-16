<?php
$showAlert=false;
$showError=false;
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
else{
  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'dbconnect.php';
   $full_name=$_POST['full_name'];
   $class=$_POST['class'];
   $marks=$_POST['marks'];
   $grade=$_POST['grade'];
   $insert_student="INSERT into `student`(`full_name`,`class`,`marks`,`grade`) VALUES('$full_name','$class','$marks','$grade') ";


	  $sql2=mysqli_query($conn,$insert_student);
if($sql2)
	  { 
		  $showAlert=true;
      header('location:list.php');
		 
	  }
	  else
	  {
		  //$showError=true;
		 
	  }
   }
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'trial.php' ?>
    Welcome - <?php echo $_SESSION['username']?>















	
<?php
    

    if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Student Details Inserted</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
        if($showError){
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Something went Wrong</strong> '. $showError.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> ';
            }
         
    ?>
    
<br><br><br>

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-8">
					<div class="card" style="box-shadow: 0 0 0px rgb(0 0 0) !important;">
						<div class="card-body">
							<form action="" method="post">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" placeholder="enter student name" name="full_name"id="full_name" required>
								</div>
		
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">class</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" placeholder="enter student class" name="class" id="class" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Marks</h6>
								</div>
							<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control"placeholder="enter marks" name="marks" id="marks" required> 
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">grade</h6>
								</div>
							<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" placeholder="enter grade " name="grade" id="grade" required>
								</div>
							</div>
							
                            
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Save Changes"  required>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
