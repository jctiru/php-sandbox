<?php 
	require 'config/config.php';
	require 'config/db.php';
	// Create Query
	$query = 'SELECT * FROM posts';
	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Blog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/journal/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Posts</h1>
		<?php foreach ($posts as $post): ?>
			<div class="card mb-2">
				<div class="card-body">
					<h4 class="card-title"><?php echo $post['title']; ?></h4>
					<h6 class="card-subtitle text-muted"><small><?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small></h6>
					<p class="card-text"><?php echo $post['body'] ?></p>
				</div>
				<div class="card-footer">
					<a class="btn btn-primary" href="<?php echo ROOT_URL ?>post.php?id=<?php echo $post['id'] ?>">Read more</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>