<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>
	<title>LifeBlog | Home </title>
</head>
<body>
<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
<div class="container">
<!-- Navbar -->
	
<!-- // Navbar -->
<!-- content -->
<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
<div class="content">
	<h2 class="content-title">
		Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
	</h2>
	<hr><hr>
	<?php foreach ($posts as $post): ?>
	<!--	<div class="post" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info">
					<h3><?php echo $post['title'] ?></h3>
					<div class="info">
						<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
						<span class="read_more">Read more...</span>
					</div>
				</div>
			</a>
		</div>-->
		<div class="row row-content align-items-center">
		<div class="col-12 col-sm-12 order-sm-first col-md">
                <div class="media">
				<div class="col-3">
				<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" >
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt=""></div>
                    <div class="media-body">
						<h2 class="mt-0"><?php echo $post['title'] ?></h2></a>
						<h6><span ><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span></h6>
                        <p class="d-none d-sm-block"><div class="info">
						<span class="read_more">Read more...</span>
					</div></p>
							
                    </div>
                </div>
</div>
            </div><br>
	<?php endforeach ?>
</div>
<!-- // content -->
</div>
<!-- // container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->