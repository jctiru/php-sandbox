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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title></title>
    <?php require 'partials/css.php' ?>
</head>

<body>
    <div>
        <?php require_once 'partials/navbar.php'; ?>
        <div class="jumbotron mt-1">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <?php require 'partials/register.php'; ?>
                        </div>
                        <div class="col-md-6">
                            <?php require 'partials/login.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form class="form-inline">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option disabled selected>Category</option>
                            <option>All</option>
                            <option>Horror</option>
                            <option>Romantic Comedy</option>
                            <option>Isekai</option>
                            <option>Action</option>
                        </select>
                        <button type="button" class="btn btn-primary ml-1">Search</button>
                        
                    </form>
                </div>
                <div class="col-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php require 'partials/content.php'; ?>
                </div>
            </div>
        </div>
        <?php require 'partials/script.php'; ?>
    </div>
</body>

</html>