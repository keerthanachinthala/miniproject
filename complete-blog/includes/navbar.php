
		<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="botton" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<a class="navbar-brand mr-auto" href="#"><img src="C:/Users/91986/Desktop/keer/logo.png" height="30" width="150px"></a>-->
			<div class="logo_div">
				<a href="../index.php"><h1>TravelBlog</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="../demo3.php"> Search</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="#">My Journey</a></li>

                </ul>
				<?php if (isset($_SESSION['user']['username'])) { ?>
						<div class=" dropdown text-right"  style="text-align: right;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="fa fa-user" style="color: white;"> <?php echo $_SESSION['user']['username'] ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin/create_post.php">Create your Own</a>
          <a class="dropdown-item" href="admin/posts.php">My stories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./logout.php">logout</a>
		</div>
				</div>
	  
	  <?php }else{ ?>
		<span class="navbar-text" style="text-align: right;">
                <a id="loginbutton" href="login.php" style="text-decoration: none;">
                <span class="fa fa-sign-in"></span> Login/Sign up</a>
                </span>
					            
<?php }?>
            </div>

        </div>
    </nav>