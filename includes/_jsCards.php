

<?php
$csvFile=fopen('equipes.csv', 'r');

while ($data=fgetcsv($csvFile)){

    if ($data[3]=='JS') {

        ?>
        <div class="espace">
            <a href="detail.php">
                <div class="trombi">
                    <img src="https://i.postimg.cc/qR22tMHn/geoffrey.jpg" alt="Geoffrey">
                    <div class="textebloc">
                        <p class="prenom-nom"><?php echo $data[0]; ?></p>
                        <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                </div>
            </a>
        </div>


        <?php
    }

}