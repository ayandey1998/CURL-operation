<?php

include "function_library.php";
$targetUrl      = 'https://uatpg.magma-hdi.co.in:444/MHDIWebIntegration/MotorProduct/api/TwoWheeler/GenerateProposal';
$requestType    = 'POST';
$params         =  [ ];
$headers        = array
                    (
                     'Authorization: Bearer v1q-7YP4N3xGxqnr_hFcYKOtRNz9P_fT0u9G7eSJ5WU8LcqASWliiKzMqBEwA40wJKJHTleDf-wEUqUTEuRr_3AOV4Q3Zi3NdcFLeqGv782mXo3nWfRLc7IkyWleYqmatMYUt1VO-rEsATXXVwQDChfs9K1OzPfPD7JrdOY2OmBA4PRebtZwynHcm5VoW3KmqNthZLqo64syNSuKyB-KOCPK4kMRrdxqAoJhUm6FaOg',
    					'Content-Type: application/json',
   						'Cookie: .AspNet.Cookies=IM6x9r5G6h0i0t3KeTlK07QYppksHoEoDAnQAHbkBuXqFL_GOUq2TLSl6c7hE47w0vkNddvlcXdWhEfrf-qUCOBRMOXjMISZqN0GTCGz8BvyFH2h7uizhFiO4qYJFMVpFzt-Y4_7YCuFEVAWqd3ZC7lIxshObZY4NC7RvnNGSGAJkeP5jPLzvycvtTUVOlli_NzizxyGrHt6vnkoqROj6Q'
                    );
$postfields     = 
					'{
							"BusinessType": "New Business",
							"PolicyProductType": "5TP1OD",
							"ProposalDate": "15/12/2022",
							"VehicleDetails": {
							"RegistrationDate": "15/12/2022",
							"TempRegistrationDate": "",
							"RegistrationNumber": "NEW",
							"IsVehicleBharatRegistered": false,
							"ChassisNumber": "UY78HYT56YTGT5673",
							"BharatVehicleOwnBy": null,
							"EngineNumber": "ERWEWFW987Y9UEF",
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
							"OfficeName": "MUMBAI-VIDYAVIHAR-(HO)",
							"BusinessSource": "INTERMEDIARY",
							"BusineeChannelType": "BROKER",
							"ChannelNumber": "INTR-41-201182",
							"BusinessSourceType": "P_AGENT",
							"PolicyEffectiveFromDate": "16/12/2022",
							"PolicyEffectiveToDate": "29/11/2026",
							"PolicyEffectiveFromHour": "14:37",
							"PolicyEffectiveToHour": "23:59"
							},
							"AddOnsPlanApplicable": false,
							"AddOnsPlanApplicableDetails": null,
							"PAOwnerCoverApplicable": true,
							"PAOwnerCoverDetails": {
							"PAOwnerSI": "1500000",
							"PAOwnerTenure": "1",
							"ValidDrvLicense": true,
							"DoNotHoldValidDrvLicense": false,
							"Ownmultiplevehicles": false,
							"ExistingPACover": false
							},
							"OptionalCoverageApplicable": false,
							"OptionalCoverageDetails": null,
							"NomineeDetails": {
							"NomineeName": "SHOBHA KULKARNI",
							"NomineeDOB": "01/01/1967",
							"NomineeRelationWithHirer": "Mother",
							"PercentageOfShare": "100",
							"GuardianName": null,
							"GuardianDOB": null,
							"RelationshoipWithGuardian": null
							},
							"CompulsoryExcessAmount": "100",
							"VoluntaryExcessAmount": null,
							"ImposedExcessAmount": null,
							"CustomerDetails": {
							"CustomerType": "I",
							"Salutation": "Mr",
							"CustomerName": "NANDKISHOR BAVISKAR",
							"CountryCode": "91",
							"CountryName": "India",
							"Nationality": "Indian",
							"ContactNo": "8668675071",
							"EmailId": "Nandkishor.Baviskar@magma-hdi.co.in",
							"DOB": "28/03/1992",
							"Gender": "MALE",
							"MaritalStatus": "Single",
							"OccupationCode": "23",
							"AddressLine1": "SR NO-186, YASHOM LIFE SPACE, MIDC ROAD, F NO-9",
							"AddressLine2": "RAVET DEHU ROAD",
							"AddressLine3": null,
							"CityDistrictCode": "24024",
							"CityDistrictName": "PUNE",
							"PinCode": "412101",
							"PincodeLocality": "SALUMBRE",
							"StateCode": "24",
							"StateName": "MAHARASHTRA",
							"UIDNo": null,
							"PanNo": null,
							"AnnualIncome": null,
							"GSTNumber": null
							},
							"FinancierDetailsApplicable": false,
							"FinancierDetails": null,
							"IsPrevPolicyApplicable": false,
							"PrevPolicyDetails": null,
							"IsTPPolicyApplicable": false,
							"PrevTPPolicyDetails": null
}
';

$curl_result = curl_process($targetUrl, $requestType, $postfields, $headers);

echo $curl_result;

echo "<br><br><pre>";

$responseArr = json_decode($curl_result, 1);
print_r($responseArr);



?>
