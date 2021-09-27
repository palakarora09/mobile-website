<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Meetme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="style/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="style/css/footer.css">
    <link rel="stylesheet" href="style/css/Navbar.css">
    <link rel="stylesheet" href="style/css/Product.css">
    <link rel="stylesheet" href="style/css/ProductSlides.css">
    <link rel="stylesheet" href="style/css/footer1.css">
    <link rel="stylesheet" href="style/css/footer2.css">
    <link rel="stylesheet" href="style/css/styles.css">
    <link rel="stylesheet" href="style/css/Sliderslides.css">
</head>

 <header class="" id="km-header">
    <nav class="navbar navbar-expand-lg p-0">
      
        <div class="container">
          <button aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarTogglerDemo03" data-toggle="collapse" type="button"><i aria-hidden="true" class="fa fa-bars"></i></button> <a class="navbar-brand" href="index.php"><img alt="koolmj" class="img-fluid" src="style/img/meetme.png"></a>
          
        </div>
      </div>
      <div class="km-navbar-menu">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
           
              
			 
              
              
            
          </div>
        </div>
      </div>
    </nav>
  </header>
</head>
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="indexx.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>