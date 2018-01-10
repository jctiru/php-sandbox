
<div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="authenticate.php">
                <h2>Please sign in</h2>
                <br>
                <input type="text" id="loginUsername" class="form-control" placeholder="Username" name="username" required autofocus>
                <input style="margin-top: 5px;" type="password" id="loginPassword" class="form-control" placeholder="Password" name="password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>          
        </div>
    </div>
</div>