

    <?php 
        include_once "header.php";
    ?>

    <main class="login-main">
        <p class="login-text">Create an account to contact me directly on the website!<br>It's free!</p>

        <form action="includes/signup.inc.php" method="post" class="login-form">
            <input type="email" name="mail" id="mail" class="login-uid" placeholder="example@email.com">
            <input type="text" name="uid" id="uid" class="login-uid" placeholder="Login">
            <input type="password" name="pwd" id="pwd" class="login-pwd" placeholder="Password">
            <input type="password" name="repeat-pwd" id="pwd" class="login-pwd" placeholder=" Repeat password">

            <input type="submit" value="Sign Up" name="signup-submit" id="signup-submit" class="login-submit">
        </form>

        <!-- <p class="error-message">Your login is invalid!</p> -->

        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class=\"error-message\">Fill in all fields!</p>";
                }

                if ($_GET["error"] == "invaliduid") {
                    echo "<p class=\"error-message\">Your login is invalid!</p>";
                }

                if ($_GET["error"] == "invalidemail") {
                    echo "<p class=\"error-message\">Your Email is invalid!</p>";
                }

                if ($_GET["error"] == "pwddontmatch") {
                    echo "<p class=\"error-message\">Passwords do not match!</p>";
                }

                if ($_GET["error"] == "uidtaken") {
                    echo "<p class=\"error-message\">Your login is already taken!</p>";
                }

                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class=\"error-message\">Something went wrong... Please try again.</p>";
                }

                if ($_GET["error"] == "none") {
                    echo "<p class=\"error-none\">You have signed up! Enjoy your stay!</p>";
                }
            }
        ?>

        <p class="login-text-two">Already have an account? No problem!</p>

       <a href="login.php" class="signup-link">Log In</a>
    </main>

    <?php 
        require "footer.php";
    ?>

    <script src="hamburger.js"></script>
    <script src="loader.js"></script>

</body>
</html>