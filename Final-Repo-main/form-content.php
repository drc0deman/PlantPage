
<main>
    
    <?php
            // add variable for primary key of table for the form data initialize to null
// Variable initialization
$dataIsGood = false;

$pmkStatusId = null;
$fnkPlantId = null;
$fldDate = null;
$fnkGrowth = null;


function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote
    // only. added & ; and # as a single quote sanitized with html entities
    //will havethis in it bob's will be come bob&#039;s
    return(preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

// Sanatize function
function getData($field) {
    if (!isset($_POST[$field])){
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Only save good data
                $dataIsGood = true;

                // Server side sanitation
                $pmkStatusId = (isset($_GET['pmkStatusId'])) ? (int) htmlspecialchars($_GET['pmkStatusId']) : -1;
                $fnkPlantId = (isset($_GET['fnkPlantId'])) ? (int) htmlspecialchars($_GET['fnkPlantId']) : -1;
                $fldDate = getData("fldDate");
                $fldGrowth = getData("fldGrowth");


                if ($pmkStatusId == "") {
                    $pmkStatusId = null;
                }

                // Server side validation

                // First name
                if ($fldDate == "") {
                    print '<p class="mistake">Enter the date of the status entry.</p>';
                    $dataIsGood = false;
                }
                elseif (!verifyAlphaNum($fldDate)) {
                    print '<p class="mistake">Enter the date of the status entry.</p>';
                    $dataIsGood = false;
                }
                elseif ($pmkStatusId < 0 || $fnkPlantId < 0) {
                    print '<p class="mistake">One or more ID is invalid.</p>';
                    $dataIsGood = false;
                }

                print '<p>valdiate is good';
                if ($dataIsGood) {
                    print ' <p>Data is good';
                    try {
                        $sql = 'INSERT INTO tblStatus SET 
                        pmkStatusId = ?,
                        fnkPlantId = ?,
                        fldEntryDate = ?,
                        fldGrowth = ?
                        ON DUPLICATE KEY UPDATE
                        pmkStatusId = ?,
                        fnkPlantId = ?,
                        fldEntryDate = ?,
                        fldGrowth = ?'; 


                        $data = array(
                        $pmkStatusId,
                        $fnkPlantId,
                        $fldDate,
                        $fldGrowth,
                        $pmkStatusId,
                        $fnkPlantId,
                        $fldDate,
                        $fldGrowth);

                        $thisDataBaseWriter->insert($sql, $data);

                    }
                    catch (PDOException $e) {
                        print '<p>Couldn\'t insert the record, please contact us ;P</p>';
                        print '<p>' . $e;
                    } // End try
                } // Ends data is good
            }// Ends preorder was submitted
        if ($dataIsGood) {
            print '<h2>Thanks, your information has been saved.</h2>';
        }
        ?>
            <figure class="">
                <img alt=""
                    class=""
                    src="../images/">
                    <cite></cite>
                <figcaption></figcaption>
            </figure>
            <article> 
                <h2>Update the health status of the plant. How's she doin'?</h2>
                    <form action = "#"
                      method = "post">

                    <fieldset class = "Status Update">
                        <legend>Status Update</legend>
                            <label class = "required" for = "fldDate">Date</label>
                            <input id = "fldDate"     
                                name = "fldDate"
                                onfocus = "this.select()"
                                type = "date"
                                value = "<?php print $date; ?>"
                                placeholder = "??/??/????"
                                required> 
                    </fieldset>

                    <fieldset class = "comments">
                            <label class = "required" for = "fldGrowth">Growth</label>
                            <input id = "fldGrowth"     
                                maxlength = "500"
                                name = "fldGrowth"
                                onfocus = "this.select()"
                                type = "text"
                                value = "<?php print $growth; ?>"
                                placeholder = "How's it growin'?"
                                required> 
                    </fieldset>
                    
                    <fieldset class="buttons">
                        <input id = "buttonSubmit" 
                            name = "buttonSubmit" 
                            tabindex = "900" 
                            type = "submit" 
                            value = "Submit" >
                    </fieldset>
                </form>     
            </article>
</main>
