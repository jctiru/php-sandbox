<!DOCTYPE html>
<html>

<head>
    <?php 
    session_start();
    if(!isset($_SESSION['totalCartItems'])){
        $_SESSION['totalCartItems'] = 0;
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title></title>
    <?php require 'partials/css.php'; ?>
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
                        <?php if(isset($_SESSION['username']) && isset($_SESSION['password'])) :?>
                            <div class="col-md-12">
                                <?php require 'partials/userPanel.php'; ?>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6">
                                <?php require 'partials/register.php'; ?>
                            </div>
                            <div class="col-md-6">
                                <?php require 'partials/login.php'; ?>
                            </div>
                        <?php endif ;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <?php //require 'partials/cart-page.php' ?>
            <?php require 'partials/content.php'; ?>
        </div>
        <?php require 'partials/script.php'; ?>
    </div>
</body>

</html>