<?php if (isset($_SESSION['user']['username'])) { ?>
	<!--<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>-->
	<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
<?php }else{ ?>
	<div class="jumbotron jumbotron-fluid img-fluid" style="background-image: url(https://wonderfulengineering.com/wp-content/uploads/2016/03/4K-Wallpaper-3.jpg)">
  <div class="container">
	  <div class="row">
		  <div class="col-6">
			  <div class="welcome_msg">
		  <h1 class="text-center"><br></h1>
		<p> 
		    Have stories to share?! <br> 
		    Write your own stories <br> 
		    Let everyone know <br>
			<span>To share...</span>
		</p></div>
		<div class="col-4">
		<a href="register.php" class="btn banner-button" >Join us!</a>
</div>
		  </div>
		  <div class="col-6">
		  <div class="login_div">
		<form action="index.php" method="post" >
			<br>
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
		  </div>
</div>
    
  </div>
</div>
<!--
<div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    One day your life <br> 
		    will flash before your eyes. <br> 
		    Make sure it's worth watching. <br>
			<span>~ Gerard Way</span>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
	<div class="login_div">
		<form action="index.php" method="post" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
</div>-->
<?php } ?>