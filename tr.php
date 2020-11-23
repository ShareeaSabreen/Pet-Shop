<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PET World</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">PET World</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">PET </a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <img data-interchange="[images/bolt-retina.jpg, (retina)], [images/bolt-landscape.jpg, (large)], [images/bolt-mobile.jpg, (mobile)], [images/bolt-landscape.jpg, (medium)]">
    <noscript><img src="images/bolt-landscape.jpg"></noscript>



	

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; PET World. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
	
	<h2> Bus Service Add Form </h2> 
		<form method="post" action="add.php">
		<br> 
		Enter Bus ID: <br/>
		<input type="text" name="bus_id" /><br>
		<br>		
		Enter Bus Name: <br/>
		<input type="text" name="name" /><br>
		<br>
		Enter Source Station: <br/>
		<input type="text" name="ss" /><br>
		<br>
		Enter Destination: <br/>
		<input type="text" name="dest" /><br>
		<br>
		Enter Available Seat: <br/>
		<input type="text" name="seat" /><br>
		<br>
		Enter Price: <br/>
		<input type="text" name="price" /><br>
		<br>
		Enter time: <br/>
		<input type="text" name="time" /><br>
		<br>
		<input type="submit" name="submit" />
		</form>
		<br><br><br>

	



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
