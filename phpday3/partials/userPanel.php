<div class="card">
    <div class="card-body">
        <h5 class="card-title">Welcome <?php echo $_SESSION['username'] ?></h5>
        <p class="card-text">What do you want to do today?</p>
        <?php if ($_SESSION['username'] != 'admin'): ?>
        	<h4><i class="fa fa-shopping-cart fa-lg"></i>
                <strong id="cartItems">
                <?php echo $_SESSION['cartTotalItems'] ?> 
                </strong> Item/s</h4>
            <a href="checkout.php" class="btn btn-lg btn-info btn-block mb-2 mt-2"><i class="fa fa-shopping-cart fa-lg"></i> Check-out Cart</a>
        <?php endif ?>
        <form method="POST" action="logout.php">
            <button class="btn btn-lg btn-primary btn-block" id="signOut" name="signOut" type="submit"><i class="fa fa-sign-out fa-lg"></i> Log Out</button>
        </form>          
    </div>
</div>