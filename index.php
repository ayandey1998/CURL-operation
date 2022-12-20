<?php

include "function_library.php";
$targetUrl      = 'https://uatpg.magma-hdi.co.in:444/MHDIWebIntegration/MotorProduct/token';
$requestType    = 'POST';
$params         =  [
                       "p1" => "abcd",
                       "p2" => "mnop",
                       "p3" => "xyz",
                    ];
$headers        = array
                    (
                    'Content-Type: application/x-www-form-urlencoded',
                    'Cookie: .AspNet.Cookies=Juq33bLat_5Z-rppHYJRa3eDNT0D_kgEW6YPlAr2Ku4aC3K6lF9QZWi-kDbadX3USq7qiifAp9yYv2aVs40rxO2Rzzeu0kDKl7iz4WULZQmSvAtJFberlW9WnqhcAZuKR2ljBHvBUHhcc9JdF2XpKrTVqjJ9F1hQnjbj4KJ53fbQ_lq4guiLXIO-4x_RIXGMznXxXhHsNOpFKYsi3tn5JQ'
                    );
$postfields     = 
'grant_type=password&username=GIBL&password=GIBL%40123&CompanyName=GREENLIFE%20INSURANCE%20BROKING%20PVT%20LTD';

$curl_result = curl_process($targetUrl, $requestType, $postfields, $headers);

echo $curl_result;

echo "<br><br><pre>";

$responseArr = json_decode($curl_result, 1);
print_r($responseArr);
// echo $responseArr['access_token'];

?>
