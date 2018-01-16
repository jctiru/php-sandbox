<?php
require 'config/config.php';
require 'config/db.php';

// Check for submit
if(isset($_POST['delete'])){
	// Get form data
	$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']); 

	$query = "DELETE FROM posts WHERE id = {$delete_id}";
	if(mysqli_query($conn, $query)){
		header('location: '.ROOT_URL.'');
	} else {
		echo "ERROR: " .mysql_error($conn);
	}
}

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
	<?php require 'inc/navbar.php'; ?>
	<div class="container">
	<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">Go Back</a>
		<h1>Post</h1>
		<div class="card mb-2">
			<div class="card-body">
				<h4 class="card-title"><?php echo $post['title']; ?></h4>
				<h6 class="card-subtitle text-muted"><small><?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small></h6>
				<p class="card-text"><?php echo $post['body'] ?></p>
			</div>
			<div class="card-footer">
				<form class="float-right" method="POST">
					<input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
					<input type="submit" name="delete" value="Delete" class="btn btn-danger">
				</form>
				
				<a class="btn btn-info" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'] ?>">Edit Post</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>