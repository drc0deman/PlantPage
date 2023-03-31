<?php
include 'top.php';

$plantId = htmlspecialchars($_GET["Id"]);

$sqlStatus = 'SELECT *';
$sqlStatus .= 'FROM tblStatus ';
$sqlStatus .= 'WHERE fnkPlantId = ?';

$data = array($plantId);

$recordsStatus = $thisDataBaseWriter->select($sqlStatus, $data);


$sqlCare = 'SELECT *';
$sqlCare .= 'FROM tblCare ';
$sqlCare .= 'WHERE fnkPlantId = ?';

$recordsCare = $thisDataBaseWriter->select($sqlCare, $data);

print_r($recordsCare);
?>


<main>


    <figure class=pmkPlantId>
        <?php
        $source = "plant_pics/"  . $plantId .  ".jpg";
        print '<img alt="pmkPlantId"
    class="pmkPlantId"
    src=' . $source. '>'
    ?>
    <cite>Olivia Welford</cite>
    </figure>

    <?php

    foreach($recordsStatus as $record){
        
        print "<p>" . $record['fldEntryDate'] . "</p>";
        print "<p>" . $record['fldGrowth'] . "</p>";

    }

    foreach($recordsCare as $record){
        
        print "<p>" . $record['fldWater'] . "</p>";
        print "<p>" . $record['fldLight'] . "</p>";
        print "<p>" . $record['fldSoil'] . "</p>";
    }

print '</main>';

include 'footer.php';

?>