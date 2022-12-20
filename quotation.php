<?php

include "function_library.php";


$chasisNo = "ADFFGHSJJNHJTY654";
// $chasisNo = $_POST['chasisNo_field'];

$currDate = date('d/m/Y');

$targetUrl      = 'https://uatpg.magma-hdi.co.in:444/MHDIWebIntegration/MotorProduct/api/TwoWheeler/GenerateQuotation';
$requestType    = 'POST';
$params         =  [ ];
$headers        = array
                    (
    					'Authorization: Bearer sFXmZqst35jElQmf988QgfmVTA-gadYwMVgT_xv_8wTHOrJvt9LEulTLKTW8z9q-ncccpGoRDIvIiDCKhtZ2Y17QhEnBkafcamDlWeTy_Galt_Q5FBKTV4Qc5YIhS7uw4_kd1WIHDBXGFEKG-wc0bodGLfU-HfR4CpP8AZVxPdlRcRwl3nEu24eVUuHyCMnAquZD5LWuxhOS-bugRZs-Lgkh8OZJIMtB7Mg9NXU4-fc',
    					'Content-Type: application/json',
    					'Cookie: .AspNet.Cookies=9NI46zANQ0Akit672q6LaGwgAqAo_v4C1-7gP1wv7qfDik5L1zSsnIVaIATavLINGOk-06WjgNZSKKg21vmCZ2FK1g81QWwkpJfEr0p5w1JQ6DrfFGa8E___EDhJ_m_LInECGCgwOkqzpWg_6AjjpDmhGt-w99xmsGSRUpo7yGfG-H50VhBZ1LPtonP-q9c2FABv8fYqH8u9Jkc131TYog'
                    );
$postfields     = 
					'{
					    "BusinessType": "New Business",
					    "PolicyProductType": "5TP1OD",
					    "ProposalDate": "'.$currDate.'",
					    "VehicleDetails": {
					        "RegistrationDate": "19/01/2021",
					        "TempRegistrationDate": "",
					        "RegistrationNumber": "NEW",
					        "IsVehicleBharatRegistered": false,
					        "ChassisNumber": '.$chasisNo.',
					        "BharatVehicleOwnBy": null,
					        "EngineNumber": "ERWEWFWEF",
					        "RTOCode": "MP-38",
					        "RTOName": "RAISEN",
					        "ManufactureCode": "HO",
					        "ManufactureName": "HONDA",
					        "ModelCode": "HO2072",
					        "ModelName": "ACTIVA 3G",
					        "HPCC": "109",
					        "MonthOfManufacture": "11",
					        "YearOfManufacture": "2021",
					        "VehicleClassCode": "37",
					        "SeatingCapacity": "2",
					        "CarryingCapacity": "1",
					        "BodyTypeCode": "31",
					        "BodyTypeName": "Scooter",
					        "FuelType": "Petrol",
					        "SeagmentType": "TWO WHEEL",
					        "TACMakeCode": "",
					        "ExShowroomPrice": "53000",
					        "IDVofVehicle": "",
					        "HigherIDV": "",
					        "LowerIDV": "",
					        "IDVofChassis": "",
					        "Zone": "Zone-B",
					        "IHoldValidPUC": false,
					        "InsuredHoldsValidPUC": false,
					        "IIBClaimSearchDetails": null
					    },
					    "GeneralProposalInformation": {
					        "CustomerType": "I",
					        "IntermediaryCode": "BRC0000388",
					        "IntermediaryName": "MAGMA HDI - CHANNEL INTEGRATION",
					        "EntityRelationShipCode": "10000015125",
					        "EntityRelationShipName": "MAGMA HDI - CHANNEL INTEGRATION",
					        "SPCode": "G01208",
					        "SPName": "NANDKISHOR ASHOK BAVISKAR",
					        "DisplayOfficeCode": "000100",
					        "OfficeCode": "000100",
					        "OfficeName": "MUMBAI-EQUINOX-(HO)",
					        "BusinessSource": "INTERMEDIARY",
					        "BusineeChannelType": "BROKER",
					        "ChannelNumber": "INTR-41-201182",
					        "BusinessSourceType": "C_AGENT",
					        "PolicyEffectiveFromDate": "19/12/2022",
					        "PolicyEffectiveToDate": "20/12/2022",
					        "PolicyEffectiveFromHour": "16:48",
					        "PolicyEffectiveToHour": "23:59"
					    },
					    "PAOwnerCoverApplicable": true,
					    "PAOwnerCoverDetails": {
					        "PAOwnerSI": "1500000",
					        "PAOwnerTenure": "1",
					        "ValidDrvLicense": true,
					        "DoNotHoldValidDrvLicense": false,
					        "Ownmultiplevehicles": false,
					        "ExistingPACover": false
					    },
					    "AddOnsPlanApplicable": false,
					    "AddOnsPlanApplicableDetails": null,
					    "OptionalCoverageApplicable": false,
					    "OptionalCoverageDetails": null,
					    "CompulsoryExcessAmount": "100",
					    "VoluntaryExcessAmount": "0",
					    "ImposedExcessAmount": "",
					    "IsPrevPolicyApplicable": false,
					    "PrevPolicyDetails": null,
					    "IsTPPolicyApplicable": false,
					    "PrevTPPolicyDetails": null
					}';

$curl_result = curl_process($targetUrl, $requestType, $postfields, $headers);

echo $curl_result;

echo "<br><br><pre>";

$responseArr = json_decode($curl_result, 1);
print_r($responseArr);



?>