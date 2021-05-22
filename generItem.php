<?php
function generHTML($rank, $image, $title, $description, $rating, $id)
{

?>
    <tr>
        <td class="search_table_position col-md-1">
            <? echo $rank ?>
        </td>
        <td class="search_table_id hidden"><? echo $id ?></td>
        <td class="search_table_img col-md-2"> <img width="150px" height="150px" src="<? echo $image ?>" alt=""> </td>
        <td class="search_table_title col-md-8">
            <h3 class="name">
                <? echo $title ?>
            </h3>
            <p>
                <? echo $description ?>
            </p>
        </td>
        <td class="search_table_rating col-md-1">
            <i class="fa fa-star" style="color:yellow" aria-hidden="true">
            </i>
            <?echo $rating ?>
        </td>

    </tr>
<?php
}
?>

<?php
function generHTMLRec($arr)
{
    echo "<ul><details>";
    foreach ($arr as $key => $value) {
        echo "<li>";
        if (is_array($value)) {
            echo "<span class = \"key\"> $key: </span>";
            generHTMLRec($value);
        } else {
            if ($key == "image") {
                echo "<span class = \"key\"> $key: </span> <img src = \"$value\" width = \"50px\" height = \"50px\"";
            }
            else if($key == "link"){
                echo "<span class = \"key\"> $key: </span> <a href = \"$value\">$value </a>";
            }
            else {
                echo "<span class = \"key\"> $key: </span> $value";
            }
        }
        echo "</li>";
    }
    echo "</details></ul>";
}


function generTable($arrayFilms)
{
    foreach ($arrayFilms as $key => $film) {
        generHTML($film["resultType"], $film["image"], $film["title"], $film["description"], "?", $film["id"]);
    }
}

function generError($textError){
    echo "<h3> Ошибка: $textError </h3>";
}

?>