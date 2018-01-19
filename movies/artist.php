<?php

require 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysql_error($conn));
} else {
    echo "Connected successfully<br>";
}
if(isset($_POST['submit'])){
    $newArtist = $_POST['artist'];
    $query = "INSERT INTO artists (name) VALUES ('$newArtist')";
    mysqli_query($conn, $query);
}
$query  = "SELECT * FROM artists";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>ARTISTS</h1>
 	<table>
 		<tr>
 			<th>Name</th>
 		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?php echo $row['name'] ?></td>
			</tr>
		<?php endwhile;?>
 	</table>
	<br>
    <form method="POST">
        <input type="text" name="artist"><br>
        <input type="submit" name="submit"><br>
    </form>
 </body>
 </html>