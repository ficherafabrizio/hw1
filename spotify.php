<?php

    // App key
    $client_id =     "399c1a3321ae45c7aa1b9e1be7cfe839";
    $client_secret = "e5f16a9e472b4781ab6d4d43f47e88f8";

    // Richiesta token
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://accounts.spotify.com/api/token");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    $headers = array("Authorization: Basic ".base64_encode($client_id.":".$client_secret));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    echo $result."<br>";
    echo "<pre>";
    print_r(json_decode($result));
    echo "</pre>";
    curl_close($curl);
  
    // Utilizzo
    $token = json_decode($result)->access_token;
    $data = http_build_query(array("q" => "clash", "type" => "artist"));
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.spotify.com/v1/search?".$data);
    $headers = array("Authorization: Bearer ".$token);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    echo $result."<br>";
    echo "<pre>";
    print_r(json_decode($result));
    echo "</pre>";
    curl_close($curl);

?>
