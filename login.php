<?php require_once __DIR__ . '/header.php'; ?>

<section class="clearfix">
    <div class="container">
        <div class="login-form">
            <img src="./lib/img/logo-image.png" alt="">
            <form action="auth.php" method="POST">
                <div class="input-parent">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-parent">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required><br>
                </div>
                <div class="input-parent">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <input type="submit" value="Login">
                    <div class="forgot">
                        <a href="#">Forgot Password</a> <a href="#">Register Here</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php require_once __DIR__ . '/footer.php'; ?>