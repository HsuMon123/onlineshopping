


<?php 
    session_start(); 
    if (!isset($_SESSION['loginuser'])) {
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


<!--   <a href="register_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a> -->
 

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">

        <!-- Nested Row within Card Body -->

        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user"  action="signup.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <input type="file" class="form-control-file" placeholder="Profile" name="profile">
                  <?php 
                    if (isset($_SESSION['profile_error_msg'])) {
                  ?>
                  <small class="text-danger"><?php echo $_SESSION['profile_error_msg']; ?></small>
                <?php 
                  } 
                  unset($_SESSION['profile_error_msg']);


                ?>
                </div>


                <div class="form-group">
                
                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder=" Enter Name" value="<?php if(isset($_SESSION['old_name'])) echo $_SESSION['old_name'] ?>">
                    <?php 
                        if (isset($_SESSION['name_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['name_error_msg']; ?></small>
                     <?php 
                      }
                      unset($_SESSION['name_error_msg']);
                      unset($_SESSION['old_name']);
                      ?>             
                </div>

                  

                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder=" Enter Email Address" value="<?php if(isset($_SESSION['old_email'])) echo $_SESSION['old_email'] ?>">
                  <?php 
                        if (isset($_SESSION['email_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['email_error_msg']; ?></small>
                     <?php 
                      }
                      unset($_SESSION['email_error_msg']);
                      unset($_SESSION['old_email']);
                      ?>
                </div>

                <div class="form-group">               
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder=" Enter Password" value="<?php if(isset($_SESSION['old_password'])) echo $_SESSION['old_password'] ?>">  
                    <?php 
                        if (isset($_SESSION['password_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['password_error_msg']; ?></small>
                     <?php 
                      }
                      unset($_SESSION['password_error_msg']);
                      unset($_SESSION['old_password']);
                      ?>               
                </div>

                <div class="form-group">               
                    <input type="password" class="form-control form-control-user" name="cpassword" id="cpassword" placeholder=" Enter Confirm Password" value="<?php if(isset($_SESSION['old_cpassword'])) echo $_SESSION['old_cpassword'] ?>">  
                    <?php 
                        if (isset($_SESSION['cpassword_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['cpassword_error_msg']; ?></small>
                     <?php 
                      }
                      unset($_SESSION['cpassword_error_msg']);
                      unset($_SESSION['old_cpassword']);
                      ?>               
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="phone" id="phone" placeholder=" Enter Phone Number" value="<?php if(isset($_SESSION['old_phone'])) echo $_SESSION['old_phone'] ?>">
                  <?php 
                        if (isset($_SESSION['phone_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['phone_error_msg']; ?></small>
                     <?php
                      }
                      unset($_SESSION['phone_error_msg']);
                      unset($_SESSION['old_phone']);
                      ?>
                </div>

                <div class="form-group">                  
                  <textarea class="form-control form-control-user" name="address" id="address" placeholder=" Enter Address">
                    <?php if(isset($_SESSION['old_address'])) echo $_SESSION['old_address'] ?>                
                  </textarea>
                   <?php 
                        if (isset($_SESSION['address_error_msg'])) {

                    ?>
                    <small class="text-danger"><?php echo $_SESSION['address_error_msg']; ?></small>
                     <?php 
                      }
                      unset($_SESSION['address_error_msg']);
                      unset($_SESSION['old_address']);
                       ?>
                </div>



               <!--  <a href="" class="btn btn-primary btn-user btn-block">
                  Register Account
                </a> -->

                <input type="submit" class="btn btn-primary float-right" value="Register Account">

                <p class="my-5">
                  Already a member? <a href="login.php"> Sign in</a>
                </p>

              </form>
              
            <!--   <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div> -->
             <!--  <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div> -->
          </div>
        </div> <!-- end row -->
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>



<?php  
    }else{
      header("location:index.php");
    }

?>
