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

?>

<?php
$csvFile=fopen('equipes.csv', 'r');

while ($data=fgetcsv($csvFile)){

   if ($data[3]=='PHP') {

       ?>
       <div class="espace">
           <a href="detail.php?firstName=<?php echo $data[0];?>">
               <div class="trombi">
                   <img class="phototrombi"src="<?php echo "img/imgdetails/".strtolower(trim($data[0])).".jpeg"?>" alt="<?= $data[0];?>">
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


















