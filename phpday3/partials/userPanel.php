<div class="card">
    <div class="card-body">
        <h5 class="card-title">Welcome <?php echo $_SESSION['username'] ?></h5>
        <p class="card-text">What do you want to do today?</p>
        <form method="POST" action="logout.php">
            <button class="btn btn-lg btn-primary btn-block" id="signOut" name="signOut" type="submit">Log Out</button>
        </form>          
    </div>
</div>