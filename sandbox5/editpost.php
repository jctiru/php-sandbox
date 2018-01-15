<?php
require 'config/config.php';
require 'config/db.php';

// Check for submit
if(isset($_POST['submit'])){
	// Get form data
	$update_id = mysqli_real_escape_string($conn, $_POST['update_id']); 
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);

	$query = "UPDATE posts SET
				title='$title',
				author='$author',
				body='$body'
				WHERE id ={$update_id}";
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
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>PHP Blog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/journal/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js">
</head>
<body>
	<?php require 'inc/navbar.php'; ?>
	</nav>
	<div class="container">
		<h1>Edit Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author'] ?>">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control" value="<?php echo $post['title'] ?>"><?php echo $post['body'] ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $_POST['id'] ?>">
			<input class="btn btn-primary" type="submit" name="submit" value="Save">
		</form>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>