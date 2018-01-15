<?php
require 'config/config.php';
require 'config/db.php';

// Check for submit
if(isset($_POST['submit'])){
	// Get form data
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);

	$query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
	if(mysqli_query($conn, $query)){
		header('location: '.ROOT_URL.'');
	} else {
		echo "ERROR: " .mysql_error($conn);
	}
}
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
		<h1>Add Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>