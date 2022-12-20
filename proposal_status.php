<?php

include "function_library.php";

$targetUrl      = 'https://uatpg.magma-hdi.co.in:444/MHDIWebIntegration/MotorProduct/api/TwoWheeler/ProposalStatus';
$requestType    = 'POST';
$params         =  [ ];
$headers        = array
                    (
    					'Authorization: Bearer z8vHv3pVRhcPgsnP67IQ6I9KENtCuLCTi3QjsS6SpsLuFJWhoMPdCe_ujHPLzi3WRQgnFHDSLHikq_uH7-QaHoWKQcoHNTw61ciLYiwmeUC_XmKfqy7m1v-j3sUOQJsTazF2bHRn35Bgx-AbhNXu7mXOCpYUV6cx920gyqRVJ-y9ci0PkbsvzKHX5U1nxCObAMRyMgaiCZOf8DfKNVbAfyE53kCUQGUHP5Jbal65vUA'
                    );
$postfields     = 
					'{ProposalNumber":"202111300005727}';

$curl_result = curl_process($targetUrl, $requestType, $postfields, $headers);

echo $curl_result;

echo "<br><br><pre>";

$responseArr = json_decode($curl_result, 1);
print_r($responseArr);



?>