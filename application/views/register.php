<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/mystyle.css';?>">
    
    <title>Register</title>
</head>
<body>
	<h1 class="col-md-5 mx-auto my-4">Welcome to Registration Page.</h1>
    <div class="container">
        
        <div class="col-md-6 mx-auto">
        <div class="card mt-4">
            <div class="card-header">
                Register
            </div>
        <form action="<?php base_url().'index.php/Welcome/index'?>" method="post" name="registerForm" id="registerForm">
        <div class="card-body register">
            <p class="card-text">Please fill in the details.</p>
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo set_value('fname');?>" class="form-control <?php echo (form_error('fname') !="") ? 'is-invalid' : '' ;?>" placeholder="First Name">
                <p class='invalid-feedback'> <?php echo strip_tags(form_error('fname'));?> </p>
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo set_value('lname');?>" class="form-control <?php echo (form_error('lname') !="") ? 'is-invalid' : '' ;?>" placeholder="Last Name">
                <p class='invalid-feedback' ><?php echo strip_tags(form_error('lname'));?></p>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" id="email" value="<?php echo set_value('email');?>" class="form-control <?php echo (form_error('email') !="") ? 'is-invalid' : '' ;?>" placeholder="Email">
                <p class='invalid-feedback' ><?php echo strip_tags(form_error('email'));?></p>
            </div>
            <div class="form-group">
                <label for="name">Phone number</label>
                <input type="phone number" name="phnum" id="phnum" value="<?php echo set_value('phnum');?>" class="form-control <?php echo (form_error('phnum') !="") ? 'is-invalid' : '' ;?>" placeholder="Phone number">
                <p class='invalid-feedback'><?php echo strip_tags(form_error('phnum'));?></p>
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="pass" id="pass" value="<?php echo set_value('pass');?>" class="form-control <?php echo (form_error('pass') !="") ? 'is-invalid' : '' ;?>" placeholder="Password">
                <p class='invalid-feedback'><?php echo strip_tags(form_error('pass'));?></p>
            </div>
            <div class="form-group">
                </br>
                <button class="btn btn-block btn-primary"> Register</button>
            </div>
            <a class="endtag" href="<?php echo base_url().'index.php/Welcome/index'?>">Already have an account! Click here to login</a>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>