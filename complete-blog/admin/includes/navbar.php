
<?php if(in_array($_SESSION['user']['role'], ["Admin"])){?>
<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Admin</h1>
		</a>
	</div>
	<div class="user-info">
	<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;| <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
	</div>
</div>
<?php }else{ ?>
	 
	 <?php include('C:\xampp\htdocs\miniproject_3rdyear\complete-blog\includes\navbar.php'); ?>
 <?php }?>
