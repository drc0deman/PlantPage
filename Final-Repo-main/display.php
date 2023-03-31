<?php
include 'top.php';
?>

<main>
    <h2>Form Results</h2>
    <?php
$sql = 'SELECT *';
$sql .= 'FROM tblEncyclopedia ';
$sql .= 'ORDER BY pmkPlantId';

/*replaced this stuff
$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchALL();
 with this line underneath*/

$records = $thisDataBaseReader->select($sql);

foreach($records as $record){
    print '<a href="displayResults.php?Id='.$record['pmkPlantId'].'">';
    print '<p>';
    print 'View: ';
    print $record['fldLatinName'] . "</p>";
}

print '<a href="manager/display.php">';
print '<p>';
print 'Head to the managers page </p>';
?>
</main>


<?php
include 'footer.php';
?>