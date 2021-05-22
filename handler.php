<?php

function getArrayByUrl($url)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);
    $data = json_decode($response, true);
    curl_close($curl);
    return $data;
}


function mergeToUrl($lang, $type, $key, $searchStr, $options)
{
    return "https://imdb-api.com/$lang/API/$type/$key/$searchStr/$options";
}


?>