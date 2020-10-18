

<?php 

  session_start();
 
  include 'backend/dbconnect.php';
  $sql="SELECT * FROM categories";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $categories=$stmt->fetchAll();


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>New index</title>
<!--   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

</head>
<body>

	<!-- Navigation -->
	
  <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top menu" >
    <div class="container">
      <a href="" class="navbar-brand" style="font-size: 30px;"><b>Online Shopping</b></a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mynav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <?php 

                  foreach ($categories as $category) {
                    
                  ?>
                    <a class="dropdown-item" href="categories.php?id=<?=$category['id']?>"><?=$category['name']?></a>
                  <?php } ?>
                  
                </div>
              </li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>


          <?php   

            if (isset($_SESSION['loginuser'])) {


           ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $_SESSION['loginuser']['name']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="backend/logout.php">Logout</a>
                  
              </li>
              <?php 

                }else{
               ?>



          <li class="nav-item"><a href="backend/login.php" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="backend/register_create.php" class="nav-link">Register</a></li>


          <?php 
            }
           ?>

          <li class="nav-item">
           <!--  <a href="checkout.php" class="nav-link" id="count">
            <span class="p1 fa-stack has-badge" id="item_count" data-count="0">
              <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" style="color:  #FF9800;"></i>
            </span>
          
          </a> -->


          <a href="checkout.php" title="fa-shopping-cart" id="count"  style="text-decoration-line: none;">
            <i class="fa fa-shopping-cart" style="font-size:24px; color:  #FF9800;"></i>

            <span id="item_count" style="color: #FF9800;">0</span>
          </a>



          </li>
         
        </ul>
      </div>

    </div>
  </nav>

  <div style="background-color: white;">
    <!-- Carousel -->
    <div class="container">
      <div class=" container-carousel">
        <div class="carousel slide" id="headerCarousel" data-ride="carousel">
         <ol class="carousel-indicators">
          <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#headerCarousel" data-slide-to="1" class=""></li>
          <li data-target="#headerCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
         <div class="carousel-item active">
          <img src="images/car1.jpg" class="d-block w-100">
          <div class="img-overlay"></div>

        </div>
        <div class="carousel-item">
          <img src="images/car2.jpg" class="d-block w-100">
          <div class="img-overlay"></div>

        </div>
        <div class="carousel-item">
          <img src="images/car3.jpg" class="d-block w-100">
          <div class="img-overlay"></div>

        </div>
      </div>

    </div>
  </div>
</div>
</div>