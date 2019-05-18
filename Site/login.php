<?php  
session_start();
    $servername = "localhost";
	$username = "id9590280_login";
	$password = "12345";
	$dbname = "id9590280_logindb";
    $con = mysqli_connect($servername,$username,$password,$dbname);   
    

    
    
    if(isset($_POST['submit'])){
        $username = ($_POST['firstname']);
        $password = ($_POST['password']);
        
        $test = "SELECT * from users where name = '$username' && password = '$password'";
        $testresult = mysqli_query($con,$test);
        $num = mysqli_num_rows($testresult);
        
    if($num == 1){
            $_SESSION['username'] = $username;
            header("location:index.php");
            
           //echo "<script type='text/javascript'> $(window).load(function(){ $('#myModal').modal('show'); }); </script>";
        }else{
            echo "<script type='text/javascript'>alert('Wrong password try again!')</script>";
           header("location:login.php");
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="login.php" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="firstname" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="registration.php">Create an Account</a></p>
    <div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="index.php">Click to go Home</a>
</div>
</div>
</body>
</html>                                		                            