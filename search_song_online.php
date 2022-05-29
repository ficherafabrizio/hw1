<?php

    $token = $_POST['hiddeninput'];
    $nome = $_POST['searchbox'];

    $data = http_build_query(array("q" => $nome, "type" => "track"));
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.spotify.com/v1/search?".$data);
    $headers = array("Authorization: Bearer ".$token);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);

    $tracks = json_decode($result)->tracks;

    echo json_encode($tracks);

    curl_close($curl);

?>