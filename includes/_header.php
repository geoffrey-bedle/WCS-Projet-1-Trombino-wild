
    <header class="topbar">
        <a href="https://wildcodeschool.fr/" target="_blank"><img src="img/wcs_logo_pink_background_400x220.png" alt="logo_wcs"></a>
        <nav>
            <a href="index.php"<?php if(strstr($_SERVER["REQUEST_URI"],'index.php')){ echo "class='active'";};?>>Home</a>
            <a href="trombino.php"<?php if(strstr($_SERVER["REQUEST_URI"],'trombino.php')){ echo "class='active'";};?>>Trombino</a>
            <a href="contact.php"<?php if(strstr($_SERVER["REQUEST_URI"],'contact.php')){ echo "class='active'";};?>>Contact</a>
        </nav>
    </header>



<?php
   /* <header class="topbar">
        <a href="home.php"><img src="img/wcs_logo_pink_background_400x220.png" alt="logo_wcs"></a>
        <nav>
            <?php
            // pour faire marcher la classe active
            $classActive = [
                'home',
                'trombino',
                'contact'
            ];

            // bout de code à tester pour récupérer la page active
            $path = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
            $file = basename ($path);

            // boucle pour la nav
            foreach ($classActive as $i => $namePage) { ?>
                <a href="<?php echo $namePage?>.php" class="<?php if ($file === $namePage . '.php'){ echo 'active'; }?>"><?php echo strtoupper($namePage); ?></a>

            <?php } ?>
        </nav>
    </header> */
