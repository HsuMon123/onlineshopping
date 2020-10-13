
<?php 

  
  include 'dbconnect.php';
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


  <a href="register_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
 

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
              <form class="user"  action="addregister.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                
                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder=" Enter Name">             
                </div>

                  <div class="form-group">
                    <label for="photo">
                      Profile         
                    </label>
                    <input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
                    <img src="<?php echo $user['photo'];?>" width="200" height="200" class="my-3" >
                  </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder=" Enter Email Address">
                </div>
                <div class="form-group">
               
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder=" Enter Password">
                 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="phone" id="phone" placeholder=" Enter Phone Number">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="address" id="address" placeholder=" Enter Address">
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