<?php
require_once "handler.php";
include "generitem.php";
include "config.php";

require('components/header.php');
?>
<section class="search">
    <div class="container">
        <div class="search_title">
            <h2>Поиск информации о фильме</h2>
        </div>
        <form class="search_form" action="index.php" method="POST">
            <div class="form-group">
                <label for="exampleInput">Строка поиска:</label>
                <input type="text" class="form-control" required placeholder="Enter search string" name="searchStr">

            </div>
            <button type="submit" class="btn btn-primary">Поиск</button>
        </form>


        <table class="search_table">
            <tbody>
                <tr class="search_table_0">

                    <th>Rank</th>
                    <th>Title</th>
                    <th class="rate">Rate</th>

                </tr>

                <?php

                if (isset($_POST['searchStr'])) {


                    $searchStr = $_POST['searchStr'];
                    $shortInfoUrl = mergeToUrl("ru", "SearchMovie", KEY, rawurlencode($searchStr), SEARCH_OPTIONS);
                    $shortInfo = getArrayByUrl($shortInfoUrl);
                    
                    if($shortInfo['errorMessage']){
                        generError($shortInfo['errorMessage']);
                    }
                    else if(count($shortInfo['results']) == 0){
                        echo "<h3> Ничего не найдено.Попробуйте ввести другой запрос </h3>";
                    }
                    else{
                        
                        generTable($shortInfo['results']);
                    }
                }

                ?>
            </tbody>
        </table>
    </div>

</section>

<?php
require('components/footer.php');
?>