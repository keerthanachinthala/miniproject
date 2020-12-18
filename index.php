<?php require_once('./complete-blog/config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/bootstrap-social/bootstrap-social.css">-->
	<link rel="stylesheet" href="styles.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="botton" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<a class="navbar-brand mr-auto" href="#"><img src="C:/Users/91986/Desktop/keer/logo.png" height="30" width="150px"></a>-->
            <div class="logo_div">
        <a href="index.php"><h1>Travel Advisor  </h1></a>
      </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="./demo3.php"> Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="./complete-blog/index.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My Journey</a></li>
                </ul>
                <?php if (isset($_SESSION['user']['username'])) { ?>
						<div class=" dropdown text-right"  style="text-align: right;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="fa fa-user" style="color: white;"> <?php echo $_SESSION['user']['username'] ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./complete-blog/admin/create_post.php">Create your Own</a>
          <a class="dropdown-item" href="./complete-blog/admin/posts.php">My stories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./coomplete-blog/logout.php">logout</a>
		</div>
				</div>
	  
	  <?php }else{ ?>
		<span class="navbar-text" style="text-align: right;">
                <a id="loginbutton" href="./complete-blog/login.php" style="text-decoration: none;">
                <span class="fa fa-sign-in"></span> Login/Sign up</a>
                </span>
					            
<?php }?>
            </div>
            

        </div>
    </nav>
  
    <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
    	<div class="carousel-inner">
    		<div class="carousel-item active">
        		<img  class="img-fluid"src="https://wallpapercave.com/wp/wp2392564.jpg" class="d-block w-100" alt="trek">
        		<div class="text-block">
    	<h1 style="font-family:'Georgia', serif; font-size: 80px;">Journey. Explore. Discover. Repeat</h1></br></br>
    	<h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
    	<button id="myexplore" class="btn btn-sm btn-dark " onclick="window.location.href='./demo3.php'"><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></button>
  		</div>
    		</div>
    		<div class="carousel-item">
      			<img class="img-fluid" src="https://wallpapercave.com/wp/wp4190318.jpg" class="d-block w-100" alt="stone">
      			<div class="text-block">
    	<h1 style="font-family:'Georgia', serif; font-size: 80px;">Journey. Explore. Discover. Repeat</h1></br></br>
    	<h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
    	<button id="myexplore" class="btn btn-sm btn-dark" onclick="window.location.href='./demo3.php'"><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></button>
    	
  		</div>
    		</div>
    		<div class="carousel-item">
      			<img  src="https://wallpaperaccess.com/full/211126.jpg" class="d-block w-100" alt="dusty">
      			<div class="text-block">
    	<h1 style="font-family:'Georgia', serif; font-size: 80px;">Journey. Explore. Discover. Repeat</h1></br></br>
    	<h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
    	<button id="myexplore" class="btn btn-sm btn-dark " onclick="window.location.href='./demo3.php'"><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true" ></i></h4></button>
    	
  		</div>
    		</div>
  		</div>
	</div></br></br></br><br>
	<div class="container">
		<div class="row row-content section1">
			<div class="  col-12 md-offset-4 ">
				<h3 class="text-center" style="color:#34495E "><strong>What do we have to offer</strong></h3>
				<h5 class="text-center col-12 md-offset-4">find out here...</h5></br>
			</div></br></br></br></br><br>
			
			<div class="col-12 col-md-4 text-center">
				<h5 style="color:#34495E "><strong>Don't known where to start ?!</strong></h5><br>
				<i class="fa fa-map-marker" aria-hidden="true"></i><br><br>
				<p>Check out the various places that we have catogerised for you and let us know your favorite!</p>
			</div>
			<div class="col-12 col-md-4 text-center">
				<h5 style="color:#34495E "><strong>Want to share your stories..?!</strong></h5><br>
				<i class="fa fa-share-alt" aria-hidden="true"></i><br><br>
				<p>Make use of the blog to share your stories to the world. Also read what other were up to.</p>
			</div>
			<div class="col-12 col-md-4 text-center">
				<h5 style="color:#34495E "><strong>Design your own trip</strong></h5><br>
				<i class="fa fa-map" aria-hidden="true"></i><br><br>
				<p>While you plan your trip, make sure you let us know so we can show you your final plan!:)</p></br><br><br><br><br><br><br><br>
			</div>
				
			<div class="col-8">
			<h3 style="font-family: 'Trebuchet MS', Helvetica, sans-serif">Places To Visit</h3><hr>
			</div>
			<div class="col-4 text-right">
				<a href="#"><h6 style="color:grey;">See all..</h6></a>
			</div>
			<!--start
			<div class="col-12">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
      	<div class="row">
      		<div class="col-sm-3">
      			<div class="card card-image img-fluid" style="background-image: url(https://curatorhall.files.wordpress.com/2015/11/300px-tajmahalbyamalmongia.jpg?w=525)">
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          
          <h4 class="card-title h4 my-0.5 py-0.5 text-bottom">Taj Mahal</h4>
          <p class="mb-4 pb-0.5 px-md-0.5 mx-md-0.5">Agra</p>

        </div>
      </div>
    </div>
      		</div>
      		<div class="col-sm-3">
      			<div class="card card-image " style="background-image: url(https://mdbootstrap.com/img/Photos/Others/city7.jpg">
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          
          <h5 class="h5 orange-text"><i class="fa fa-camera-retro"></i> Photography</h5>
          <h4 class="card-title h4 my-0.5 py-0.5">Jumbotron with image overlay</h4>
          <p class="mb-4 pb-0.5 px-md-0.5 mx-md-0.5">Lorem ipsum dolor sit amet, consectetur </p>

        </div>
      </div>
    </div>
      		</div>
      		<div class="col-sm-3">
      			<div class="card card-image " style="background-image: url(https://mdbootstrap.com/img/Photos/Others/city7.jpg">
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          
          <h5 class="h5 orange-text"><i class="fa fa-camera-retro"></i> Photography</h5>
          <h4 class="card-title h4 my-0.5 py-0.5">Jumbotron with image overlay</h4>
          <p class="mb-4 pb-0.5 px-md-0.5 mx-md-0.5">Lorem ipsum dolor sit amet, consectetur </p>

        </div>
      </div>
    </div>
      		</div>
      		<div class="col-sm-3">
      			<div class="card card-image " style="background-image: url(https://mdbootstrap.com/img/Photos/Others/city7.jpg">
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

         
          <h5 class="h5 orange-text"><i class="fa fa-camera-retro"></i> Photography</h5>
          <h4 class="card-title h4 my-0.5 py-0.5">Jumbotron with image overlay</h4>
          <p class="mb-4 pb-0.5 px-md-0.5 mx-md-0.5">Lorem ipsum dolor sit amet, consectetur </p>

        </div>
      </div>
    </div>
      		</div>
      	</div>
      </div>
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
			end-->
			<div class="row row-content">
				<div class="col-12 col-md-3">
					<div id="card" class="card shadow-sm " >
  <img class="card-img-top img-fluid" src="https://www.mayaflowers.com/blog/wp-content/uploads/2016/09/botanical-kolkata-1024x768.jpg" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-text">Recretional parks</h6>
  </div>
</div>
</div>
<div class="col-12 col-md-3">
	<div id="card" class="card shadow-sm " >
  <img class="card-img-top img-fluid" src="https://www.nativeplanet.com/img/2017/09/04-1504499382-8.jpg" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-text">Piligrim places</h6>
  </div>
</div>
</div>
<div class="col-12 col-md-3">
	<div id="card" class="card shadow-sm " >
  <img class="card-img-top img-fluid" src="https://www.treebo.com/blog/wp-content/uploads/2017/12/baga_beach__north_go_QvVbp.jpg" style="height:185px;" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-text">Beaches</h6>
  </div>
</div>
</div><hr>
<div class="col-12 col-md-3">
	<div id="card" class="card shadow-sm " >
  <img class="card-img img-fluid" src="https://blog.thomascook.in/wp-content/uploads/2018/03/3.-Hawa-Mahal-e1521192706519.jpg" style="height:185px;" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-text">Historical places</h6>
  </div>
</div>
</div><hr>
<!--
<div class="col-md-3">
<div class="card card-image " style="background-image: url(https://mdbootstrap.com/img/Photos/Others/city7.jpg">
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

         
          <h5 class="h5 orange-text"><i class="fa fa-camera-retro"></i> Photography</h5>
          <h4 class="card-title h4 my-0.5 py-0.5">Jumbotron with image overlay</h4>
          <p class="mb-4 pb-0.5 px-md-0.5 mx-md-0.5">Lorem ipsum dolor sit amet, consectetur </p>
          <a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>

        </div>
      </div>
    </div>
</div>-->
</div><hr>

		</div>
	</div>
<!--	<div class="carousel carousel-slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner ">
		<div class="carousel-item active">-->
			<div class="card">
				<img class="img-fluid" style="opacity:1;height:500px;" src="https://wallpapercave.com/wp/wc1MjEf.jpg">
				<div class="card-img-overlay">
					<div class="row row-content">
						<div class="col-6">
							<img class="img-fluid" style="opacity:0.8;" src="https://news.mit.edu/sites/default/files/images/202006/treasure-map.jpg">
						</div>
						<div class="col-6">
							<h1 class="text-right" style="font-size: 80px;">Let us Know your plan</h1><br><br><br><br><br><br>
							<button id="makeyourtrip" class="btn btn-sm btn-light "><h4>MakeYourTrip <i class="fa fa-bicycle" aria-hidden="true"></i></i></h4></button><
						</div>
					</div><br><br><br><br>
		</div>
	</div><br><br><br><br>
<!--		</div>
	</div>
</div>-->
<div class="container">
	<div class="row row-content">
		<div class="col-12 text-center">
			<h2 style="font-family: 'Trebuchet MS', Helvetica, sans-serif">What's More</h2><hr  style="width:40%;border-bottom: 1px #ddd;">
		</div><br><br><br><br>
		<div class="col-12 col-sm-6">
			<div id="mycard" class="card shadow-sm  text-white">
				<img class="img-fluid" style="height:350px;"  src="https://vagabondholidays.com/wp-content/uploads/2019/06/classical-dance-in-india-1024x685-1024x583.jpg">
				<div class="card-img-overlay text-center" style="background-color: rgba(0,0,0,0.3);  ">
					<h1 style='font-size: 40px;font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif'><strong>Road trip to Ladakh</strong></h1><br>
					<p>Starting from Delhi, all the way to Ladakh</p>
				</div>
			</div>
	</div>
	<div class="col-12 col-sm-6">
			<div id="mycard" class="card shadow-sm  text-white">
				<img class="img-fluid"  src="https://img.theculturetrip.com/768x/smart/wp-content/uploads/2017/07/manali-to-leh-1024x683.jpg">
				<div class="card-img-overlay text-center" style="background-color: rgba(0,0,0,0.3);">
					<h1 style='font-size: 40px;font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif'><strong>Manali to Leh</strong></h1><br>
					<p>Manali–Leh route</p>
				</div>
			</div>
	</div><br><br><br><br><br>
	<div class="col-12 text-center"><br><br><br><br><br>
		<h2 style="font-family: 'Trebuchet MS', Helvetica, sans-serif">Travel Stories</h2><hr style="width:40%">
		<h6 class="text-right" style="color:grey;"><a href="Blog1.html">See all...</a></h6>
	</div>
<div class="col-12 offset-sm-0.7 col-sm-4">
	<div class="card shadow-sm">
  <img class="img-fluid"src="https://img.theculturetrip.com/768x/smart/wp-content/uploads/2017/07/pondicherry-view-1024x683.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h5><strong>10 days trip</strong></h5>
  	<p style="color: grey;">0 comments</p><br>
    <p class="card-text" style="color: grey;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint </p><br>
    <h6 class="text-right" style="text:underline;"><a href="Blog1.html">Read more...</a></h6>
  </div>
</div>
</div>
<div class="col-12  col-sm-4">
	<div class="card shadow-sm">
  <img class="img-fluid"src="https://img.theculturetrip.com/768x/smart/wp-content/uploads/2017/07/shimla-to-manali-1024x683.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h5><strong>lorem ipsum</strong></h5>
  	<p style="color: grey;">0 comments</p><br>
    <p class="card-text" style="color: grey;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint </p><br>
    <h6 class="text-right" style="text:underline;"><a href="Blog1.html">Read more...</a></h6>
  </div>
</div>
</div>
<div class="col-12  col-sm-4">
	<div class="card shadow-sm">
  <img class="img-fluid"src="https://img.theculturetrip.com/768x/smart/wp-content/uploads/2017/07/ahmedabad-to-kutch-1024x640.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h5><strong>lorem ipsum</strong></h5>
  	<p style="color: grey;">0 comments</p><br>
    <p class="card-text" style="color: grey;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint </p><br>
    <h6 class="text-right" style="text:underline;"><a href="Blog1.html">Read more...</a></h6>
  </div>
</div>
</div>
</div>
</div>
    <footer class="footer ">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Explore</a></li>
                        <li><a href="./demo3.html">Search</a></li>
                        <li><a href="./complete-blog/index.php">Blog</a></li>
                        <li><a href="#">Myjourney</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              101, Somewhere Somewhere<br>
		              Somewhere, Hyderabad<br>
		              INDIA<br>
		              <i class="fa fa-phone fa-lg"></i>: +91 555 555 555<br>
		              <i class="fa fa-fax fa-lg"></i>: +040 5555 5555<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="#">noidea@lost.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center" style="background-color: white;">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Travel Advisor</p>
                </div>
           </div>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!--<script src="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="C:/Users/91986/coursera/Bootstrap4/conFusion/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>-->
</body>
</html>