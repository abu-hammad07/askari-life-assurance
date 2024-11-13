<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// require_once 'Database.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['inpPolicyNo']) && isset($_POST['inpCNICNo']) && isset($_POST['inpMobileNo']) && isset($_POST['inpSecurityCode'])) {
//         $inpPolicyNo = $_POST['inpPolicyNo'];
//         $inpCNICNo = str_replace('-', '', $_POST['inpCNICNo']);
//         $inpMobileNo = $_POST['inpMobileNo'];
//         $inpSecurityCode = $_POST['inpSecurityCode'];

//         $db = new Database();
//         $result = $db->insertPaymentData($inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode);

//         // Decode the result from insertPaymentData for further processing
//         $resultData = json_decode($result, true);

//         if (isset($resultData['error'])) {
//             echo $result;
//         } else {
//             $authCode = "1114";
//             // $apiUrl = "https://illus.askarilife.com/api/theKuickpayLink.php?inpPolicyNo=$inpPolicyNo&inpCNICNo=$inpCNICNo&inpMobileNo=$inpMobileNo&inpSecurityCode=$inpSecurityCode&authCode=$authCode&apicode=987325";
//             $apiUrl = "https://illus.askarilife.com/api/theKuickpayLink.php?inpPolicyNo=$inpPolicyNo&inpCNICNo=$inpCNICNo&inpMobileNo=$inpMobileNo&inpSecurityCode=$inpSecurityCode&authCode=5956499&apicode=987321";

//             $ch = curl_init();
//             curl_setopt($ch, CURLOPT_URL, $apiUrl);
//             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//             $apiResponse = curl_exec($ch);

//             if (curl_errno($ch)) {
//                 echo json_encode(['error' => 'Failed to fetch data from the external API: ' . curl_error($ch)]);
//                 curl_close($ch);
//                 exit();
//             }
//             curl_close($ch);

//             // Decode the API response and check for errors
//             $apiData = json_decode($apiResponse, true);
//             if (json_last_error() !== JSON_ERROR_NONE) {
//                 echo json_encode(['error' => 'Invalid response from the external API.']);
//                 exit();
//             }

//             if (isset($apiData['KuickpayID']) && isset($apiData['PaymentLink'])) {
//                 $response = [
//                     'apiResponse' => $apiData
//                 ];
//                 echo json_encode($response);
//             } else {
//                 echo json_encode(['error' => 'Invalid response from the external API.']);
//             }
//         }
//     } else {
//         echo json_encode(['error' => 'Policy No, CNIC, Mobile No, and Security Code are required.']);
//     }
// } else {
//     http_response_code(405); // Method Not Allowed
//     exit('Method Not Allowed');
// }





// ===============================================================================

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['inpPolicyNo']) && isset($_POST['inpCNICNo']) && isset($_POST['inpMobileNo']) && isset($_POST['inpSecurityCode'])) {
        $inpPolicyNo = $_POST['inpPolicyNo'];
        $inpCNICNo = str_replace('-', '', $_POST['inpCNICNo']);
        $inpMobileNo = $_POST['inpMobileNo'];
        $inpSecurityCode = $_POST['inpSecurityCode'];

        // Debug: Log parameters
        error_log("Policy No: $inpPolicyNo");
        error_log("CNIC No: $inpCNICNo");
        error_log("Mobile No: $inpMobileNo");
        error_log("Security Code: $inpSecurityCode");

        $db = new Database();
        $result = $db->insertPaymentData($inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode);

        $apiData = json_decode($result, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['error' => 'Invalid response from the external API.']);
            exit();
        }

        if (isset($apiData['KuickpayID']) && isset($apiData['PaymentLink'])) {
            $response = [
                'apiResponse' => $apiData
            ];
            echo json_encode($response);
        } else {
            echo json_encode(['error' => 'Invalid response from the external API.']);
        }
    } else {
        echo json_encode(['error' => 'Policy No, CNIC, Mobile No, and Security Code are required.']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    exit('Method Not Allowed');
}
