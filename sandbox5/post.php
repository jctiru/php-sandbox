<?php
require 'config/config.php';
require 'config/db.php';

//Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);
// Create Query
$query = 'SELECT * FROM posts WHERE id = '.$id;
// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

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
		<div class="card mb-2">
			<div class="card-body">
				<h4 class="card-title"><?php echo $post['title']; ?></h4>
				<h6 class="card-subtitle text-muted"><small><?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small></h6>
				<p class="card-text"><?php echo $post['body'] ?></p>
			</div>
			<div class="card-footer">
				<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>