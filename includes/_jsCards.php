<?php
$csvFile = fopen('equipes.csv', 'r');

while ($data = fgetcsv($csvFile)) {

    if ($data[3] == 'JS') {

        ?>
        <div class="espace">
            <a href="detail.php?firstName=<?= $data[0]; ?>">
                <div class="trombi">
                    <img class="phototrombi"
                         src="<?php echo "img/imgdetails/" . strtolower(trim($data[0])) . ".jpeg" ?>" alt="<?= $data[0];?>">
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

