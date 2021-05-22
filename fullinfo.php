<?php
include "handler.php";
include "components/header.php";
include "config.php";
include "generItem.php";
?>
<section class="search">
    <div class="container">

<?php

    $id = $_GET['id'];
    $arrFullInfoUrl = mergeToUrl('ru', 'Title', KEY, $id, TITLE_OPTIONS);
    $arrFullInfo = getArrayByUrl($arrFullInfoUrl);
    
    if($arrFullInfo['errorMessage']){
        generError($arrFullInfo['errorMessage']);
    }
    else{
        generHTMLRec($arrFullInfo);
    }

?>

    </div>
</section>

<?php
include "components/footer.php"; 
?>