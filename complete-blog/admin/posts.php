<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php $posts = getAllPosts(); ?>
	<title>Admin | Manage Posts</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container container1 content">	<br><br><br>
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 80%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>N</th>
						<th>Title</th>
						<th>Author</th>
						<th>Views</th>
						<!-- Only Admin can publish/unpublish post -->
						<?php if ($_SESSION['user']['role'] == "Admin" ||$_SESSION['user']['role'] == "Author"): ?>
							<th><small>Publish</small></th>
						<?php endif ?>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as $key => $post): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $post['author']; ?></td>
							<td>
								<a 	target="_blank"
								href="<?php echo BASE_URL . 'single_post.php?post-slug=' . $post['slug'] ?>">
									<?php echo $post['title']; ?>	
								</a>
							</td>
							<td><?php echo $post['views']; ?></td>
							
							<!-- Only Admin can publish/unpublish post -->
							<?php if ($_SESSION['user']['role'] == "Admin"||$_SESSION['user']['role'] == "Author" ): ?>
								<td>
								<?php if ($post['published'] == true): ?>
									<a class="fa fa-check btn unpublish"
										href="posts.php?unpublish=<?php echo $post['id'] ?>">
									</a>
								<?php else: ?>
									<a class="fa fa-times btn publish"
										href="posts.php?publish=<?php echo $post['id'] ?>">
									</a>
								<?php endif ?>
								</td>
							<?php endif ?>

							<td>
								<a class="fa fa-pencil btn edit"
									href="create_post.php?edit-post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete" 
									href="create_post.php?delete-post=<?php echo $post['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
	<?php include(ROOT_PATH . '/admin/includes/footer.php') ?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
</body>
</html>