<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user']['username'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; |
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container container1 dashboard">	<br><br><br>
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>Newly registered users</span>
			</a>
			<a href="posts.php" style="float:right;"> 
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
			<!--<a>
				<span>43</span> <br>
				<span>Published comments</span>
			</a>-->
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
	<?php include(ROOT_PATH . '/admin/includes/footer.php') ?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>