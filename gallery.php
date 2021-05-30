

    <?php 
        include_once "header.php";
    ?>
    
    <main class="slide-player">
        <button onClick="prev();" class="slide-nav" id="nav-prev"><</button>
        <img class="slide-img" src="#">
        <button onClick="next();" class="slide-nav" id="nav-next">></button>
        <button onClick="togglePlayer();"class="close-player">x</button>
    </main>
    
    <ul class="thumbnails-gallery"></ul>

    <?php 
        require "footer.php";
    ?>

    <template class="thumbnail-template">
        <li class="thumbnail">
            <img onClick="togglePlayer(src);" class="thumbnail-img" src="Gallery/3.jpeg">
        </li>
    </template>
    
    <script src='hamburger.js'></script>
    <script src="gallery.js"></script>
    <script src="loader.js"></script>

</body>
</html>