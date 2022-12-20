<?php

function curl_process($targetUrl, $requestType, $postfields, $headers, $params='') {

    if($params!='') {
        $targetUrl = $targetUrl . '?' . http_build_query($params);
        echo $targetUrl."<br>";
    }
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $targetUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestType);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }
    

    curl_close($ch);
    return $response;
}


?>