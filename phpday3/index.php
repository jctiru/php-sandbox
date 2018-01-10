<!DOCTYPE html>
<html>

<head>
    <?php 
	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
		session_start();
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
	}
 	?>
    <title></title>
    <?php require 'partials/css.php' ?>
</head>

<body>
    <div>
        <?php require_once 'partials/navbar.php'; ?>
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
        <div class="container">
            <div class="row">
                <?php require 'partials/register.php'; ?>
                <?php require 'partials/login.php'; ?>
            </div>
        </div>
        <?php require 'partials/script.php'; ?>
    </div>
</body>

</html>