
    <?php 
        include_once "header.php";
    ?>

    <main class="contact-main">

        <section class="contact-form-container">
            <form action="" method="post" class="contact-form">
                <input type="text" name="name" id="name" placeholder="Your name" class="contact-form-name">
                <input type="email" name="email" id="email" placeholder="example@email.com" class="contact-form-email" required>
                <textarea name="msg" id="msg" placeholder="Your message" class="contact-form-msg"></textarea>

                <input type="submit" value="Send message" class="contact-form-submit">
            </form>
        </section>

    </main>
    


    <?php 
        require "footer.php";
    ?>

    <script src="hamburger.js"></script>
    <script src="loader.js"></script>

</body>
</html>