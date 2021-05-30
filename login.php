
    <?php 
        include_once "header.php";
    ?>

    <main class="login-main">
        <p class="login-text">Log in or create an account to contact me directly on the website!</p>

        <form action="includes/login.inc.php" method="post" class="login-form">
            <input type="text" name="uid" id="uid" class="login-uid" placeholder="Login">
            <input type="password" name="pwd" id="pwd" class="login-pwd" placeholder="Password">
            <input type="submit" value="Log In" name="login-submit" id="login-submit" class="login-submit">
        </form>

        <?php 
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "wronglogin") {
                    echo "<p class=\"error-login\">Wrong login! Try again!</p>";
                }

                if ($_GET["error"] == "wrongpwd") {
                    echo "<p class=\"error-login\">Wrong password! Try again!</p>";
                }
            }
        ?>

        <p class="login-text-two">Don't have an account? No problem!</p>

       <a href="signup.php" class="signup-link">Sign Up</a>
    </main>

    <?php 
        require "footer.php";
    ?>

    <script src="hamburger.js"></script>
    <script src="loader.js"></script>

</body>
</html>