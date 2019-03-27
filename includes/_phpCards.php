<?php


/*$file=fopen("equipes.csv", "r");

var_dump($data);

fclose($file);*/


/*$csvFile = file('equipes.csv');  //ouvre le fichier csv on a le total en ligne simple

//$data = [];
foreach ($csvFile as $line) {   // tant qu'il y a des lignes dans $csvFile
    $data = str_getcsv($line);  // la fonction str_getcsv prend classe $line en tableau dans $data
                                //$line et data c 'est la meme chose mais data est classé en tableau

    ?>
<div class="espace">
    <a href="detail.php"><div class="trombi">
            <img src="https://i.postimg.cc/qR22tMHn/geoffrey.jpg" alt="Geoffrey">
            <div class="textebloc">
                <p class="prenom-nom"><?php echo $data[0];?></p>
                <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
            </div>
        </div></a>
</div>
<?php


 }

*/
require "_connect.php";
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM wilder";
$res = $pdo->query($query);
$wilders = $res->fetchAll(PDO::FETCH_ASSOC);


foreach ($wilders as $wilder => $data) {

    if ($data['cursus'] == 'PHP') {
        ?>

        <div class="espace">
            <a href="/detail.php?firstName=<?= $data['firstname']; ?>">
                <div class="trombi">
                    <img class="phototrombi"
                         src="../img/imgdetails/<?= strtolower($data['firstname'] . '%20' . $data['lastname']); ?>.jpeg">
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

















