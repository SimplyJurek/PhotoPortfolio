
    
    <?php 
        include_once "header.php";
    ?>
    
    <header class="welcome-container">
        <div class="welcome-img-container">
            <img src="IMG/welcome-img.jpeg" alt="Picture of me" class="welcome-img">
        </div>

        <?php 
                if (isset($_SESSION["useruid"])) {
                    echo "<h1 class=\"welcome-text\">Welcome,<br>".$_SESSION["useruid"]."</h1>";
                    
                }   else {
                    echo "<h1 class=\"welcome-text\">Welcome</h1>";
                }
            ?>

    </header>

    <main>
        
        <section class="quote-container">
            <h2 class="quote-text">“We are making photographs to understand what our lives mean to us.”</h2>
            <h4 class="quote-author">- Ralph Hattersley</h4>
        </section>

        <section class="my-story-container">
            <h4 class="my-story-heading">How it started</h4>
            <img src="IMG/how-it-started-img.jpeg" alt="me at a very young age" class="my-story-img" id="img-one">
            <p class="my-story-text" id="text-one">When I was just a little boy I always felt some kind of attraction towards cameras. But it was not a need to be in the spotlight and be a star of every photo. It was more of a desire to capture moments and make people feel a part of the photographed scene.</p>

            <h4 class="my-story-heading">How it was going</h4>
            <img src="IMG/how-it-was-going-img.JPG" alt="family enjoying a sunny day in Cracow" class="my-story-img" id="img-two">
            <p class="my-story-text" id="text-two">Although my intrests changed over the years one thing always stayed the same - I wanted to be able to relive moments from the past and share them with others. That's why, no matter my current passion, I always carried a photo camera with me. At first I tried capturing people and emotions but then quickly switched to photographing landscapes insted.</p>
            
            <h4 class="my-story-heading">How it is now</h4>
            <img src="IMG/how-it-is-now-img.JPG" alt="mountain road" class="my-story-img" id="img-three">
            <p class="my-story-text" id="text-three">Despite having less time nowadys due to college and work I still consider a day wasted without making at least a hundred photos. My galllery is still growing and they represent my journey through life and it's many surprises. Join me on this adventure and help me gather more memories!</p>

            <div class="my-story-button-container">
                <a href="contact.php" class="my-story-button-link">Let's work together!</a>
            </div>
        </section>

        <section class="counter-section">
            <div class="couter-container">
                <p class="counter-text">So far, I have uploaded<span class="counter">20</span>photos.</p>
                <a href="gallery.php" class="counter-link">Click here to see them all!</a>
            </div>
        </section>

        <?php 
        require "footer.php";
        ?>

    </main>
    
    <script src="hamburger.js"></script>
    <script src="loader.js"></script>

</body>
</html>