<?php

require 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysql_error($conn));
} else {
    echo "Connected successfully<br>";
}
$query  = "SELECT * FROM songs";
$result = mysqli_query($conn, $query);
if (isset($_POST['submit'])) {
    $newTitle  = $_POST['title'];
    $newLength = $_POST['length'];
    $newGenre  = $_POST['genre'];
    $query     = "INSERT INTO songs (title, length, genre, album_id) VALUES ('$newTitle', '$newLength', '$newGenre', 1)";
    mysqli_query($conn, $query);
}
if (isset($_GET['delete_id'])) {
    $id    = $_GET['delete_id'];
    $query = "DELETE FROM songs WHERE id = $id";
    mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>SONGS</h1>
 	<table>
 		<tr>
 			<th>Title</th>
 			<th>Length</th>
 			<th>Genre</th>
 			<th>Delete?</th>
 		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?php echo $row['title'] ?></td>
				<td><?php echo $row['length'] ?></td>
				<td><?php echo $row['genre'] ?></td>
				<td><a href="connection.php?delete_id=<?php echo $row['id'] ?>"><button>Delete?</button></a></td>
			</tr>
		<?php endwhile;?>
 	</table>
	<br>
 	<form method="POST">
 		Title: <input type="text" name="title"><br>
 		Length: <input type="number" name="length"><br>
 		Genre: <input type="text" name="genre"><br>
 		<input type="submit" name="submit" value="Submit">
 	</form>
 </body>
 </html>