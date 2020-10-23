<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/mystyle.css';?>">
    
	<title>Index Page</title>
</head>
<body>
	<div class="top-message">
	<?php
            $msg = $this->session->flashdata('msg');
            if($msg != ''){
                echo "<div class='alert alert-success'>$msg</div>";
            }
        
        ?>
	<?php
            $msg = $this->session->flashdata('msg1');
            if($msg != ''){
                echo "<div class='alert alert-danger'>$msg</div>";
            }
        
        ?>
	</div>
	<div class="mt-4 col-md-4 mx-auto">
		<h1>Welcome to Our Page</h1>
	</div>
	<div class="container col-md-2 mx-auto mt-5">	
	<form action="<?php base_url().'index.php/Welcome/index';?>" method="post" name="loginForm" id="loginForm">
		<div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" id="email" value="<?php echo set_value('email');?>" class="form-control <?php echo (form_error('email') !="") ? 'is-invalid' : '' ;?>" placeholder="Email" autofocus> 
                <p class='invalid-feedback' ><?php echo strip_tags(form_error('email'));?></p>
        </div>
		<div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="pass" id="pass" value="<?php echo set_value('pass');?>" class="form-control <?php echo (form_error('pass') !="") ? 'is-invalid' : '' ;?>" placeholder="Password">
                <p class='invalid-feedback'><?php echo strip_tags(form_error('pass'));?></p>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-primary">Submit</button>
		</div>
		<a class="endtag	" href="<?php echo base_url().'index.php/Auth/register'?>">Create New Account</a>
	</form>
	</div>	

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>