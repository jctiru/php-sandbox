<?php 
	$host = 'localhost';
	$user = 'root';
	$password = 'password';
	$dbname = 'pdoposts';

	// Set DSN
	$dsn = 'mysql:host=' .$host.';dbname='.$dbname;
	// Create a PDO instance
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	# PDO QUERY
	// $stmt = $pdo->query('SELECT * FROM posts');
	// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	// 	echo $row['title'] . '<br>';
	// }
	// while ($row = $stmt->fetch()) {
	// 	echo $row->title . '<br>';
	// }

	# PREPARED STATEMENTS (prepare & excecute)
	
	// FETCH MULTIPLE POSTS

	// User Input
	$author = 'jctiru';
	$is_published = true;
	$id = 1;

	// Positional Paramns
	// $sql = "SELECT * FROM posts WHERE author = ?";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute([$author]);
	// $posts = $stmt->fetchAll();

	// Named Params
	// $sql = "SELECT * FROM posts WHERE author = :author AND is_published = :is_published";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
	// $posts = $stmt->fetchAll();	

	// foreach ($posts as $post) {
	// 	echo $post->title . '<br>';
	// }

	// FETCH SINGLE POST 
	// $sql = "SELECT * FROM posts WHERE id = :id";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id' => $id]);
	// $post = $stmt->fetch();
	// echo $post->body;

	// GET ROW COUNT
	// $sql = "SELECT * FROM posts WHERE author = ?";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute([$author]);
	// $postCount = $stmt -> rowCount();
	// echo $postCount;

	// INSERT DATA
	// $title = 'Post Five';
	// $body = 'This is post five';
	// $author = 'jctiru';

	// $sql = "INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
	// echo 'Post added';

	// UPDATE DATA
	// $id = 1;
	// $body = 'This is updated post';

	// $sql = "UPDATE posts SET body = :body WHERE id = :id";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['body' => $body, 'id' => $id]);
	// echo 'Post updated';

	// DELETE DATA
	// $id = 3;

	// $sql = "DELETE FROM posts WHERE id = :id";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id' => $id]);
	// echo 'Post deleted';

	// SEARCH DATA
	// $search = "%post%";
	// $sql = "SELECT * FROM posts WHERE title LIKE ?";
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute([$search]);
	// $posts = $stmt->fetchAll();

	// foreach ($posts as $post) {
	// 	echo $post->title . '<br>';
	// }

	// LIMIT DATA
	$author = 'jctiru';
	$limiter = 2;
	$sql = "SELECT * FROM posts WHERE author = :author LIMIT :limiter";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['author' => $author, 'limiter' => $limiter]);
	$results = $stmt->fetchAll();
	foreach ($results as $result) {
		echo $result->title . "<br>";
	}
 ?> 