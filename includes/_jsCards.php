<?php
/*$csvFile = fopen('equipes.csv', 'r');

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
*/
require "_connect.php";
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM wilder";
$res = $pdo->query($query);

$wilders = $res->fetchAll(PDO::FETCH_ASSOC);



foreach ($wilders as $wilder => $data ){
    if ($data['cursus']=='JS') {
        ?>

        <div class="espace">
            <a href="/detail.php?firstName=<?= $data['firstname']; ?>">
                <div class="trombi">
                    <img class="phototrombi"
                         src="../img/imgdetails/<?= strtolower($data['firstname'] . '%20' . $data['lastname']) ?>.jpeg">
                    <div class="textebloc">
                        <p class="prenom-nom"><?= ucwords($data['firstname'] . ' ' . $data['lastname'] )?></p>
                        <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                </div>
            </a>
        </div>
        <?php
    }
}
?>
