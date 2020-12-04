<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
    <?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
	<title>Blog | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<?php include(ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->
        <?php include(ROOT_PATH . '/includes/banner.php') ?>
	<div class="container">
		<!-- navbar -->
		
		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
            <?php foreach ($posts as $post): ?>
				<div class="row row-content align-items-center">
		<div class="col-12 col-sm-12 order-sm-first col-md">
                <div class="media">
				<div class="col-3 ">
				<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" >
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
							src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="">
							<?php if (isset($post['topic']['name'])): ?>
			<a href="<?php echo BASE_URL . 'filtered.php?topic=' . $post['topic']['id'] ?>" class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>
						</div>
                    <div class="media-body">
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" >
						<h2 class="mt-0"><?php echo $post['title'] ?></h2> </a>
						<h6><span ><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span></h6>
                        <p class="d-none d-sm-block"><div class="info">
						<span class="read_more">Read more...</span>
					</div></p>
							
                    </div>
                </div>
</div>
            </div><br>
				<!--	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>
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
<?php endforeach ?>
		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include(ROOT_PATH . '/includes/footer.php') ?>