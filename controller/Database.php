<?php

class Database
{
    // private $host = 'server.askarilife.com';
    // private $username = 'askarili_websitedb_user';
    // private $password = 'hndKemae2561k';
    // private $database = 'askarili_websiteDB';



    // $DB_HostName = "tiger.askarilife.com";
    // $DB_Name = "askari_websiteDB";
    // $DB_User = "askari_websitedb_user";
    // $DB_Pass = "hndKemae2561k";

    private $host = 'tiger.askarilife.com';
    private $username = 'askari_websitedb_user';
    private $password = 'hndKemae2561k';
    private $database = 'askari_websiteDB';

    private $sendAgentDataApiUrl = "https://illus.askarilife.com/api/theAgentConfirmation.php";
    private $sendPaymentDataApiUrl = "https://illus.askarilife.com/api/theKuickpayLink.php";

    private $agentDataApiCode = 987321;
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database, 3306);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function generateRandomNumber($min = 1000, $max = 10000000)
    {
        return mt_rand($min, $max);
    }

    public function sendAgentData($agentCode, $securityCode, $randCode)
    {
        $endpoint = $this->sendAgentDataApiUrl;
        $apicode = $this->agentDataApiCode;

        $url = $endpoint . "?inpAgentCode=" . $agentCode . "&inpSecurityCode=" . $securityCode . "&authCode=" . $randCode . "&apicode=" . $apicode;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);
        return $response;
    }

    public function insertData($agentCode, $securityCode)
    {
        $randCode = $this->generateRandomNumber();
        date_default_timezone_set('Asia/Karachi');
        $dateTime = new DateTime('now', new DateTimeZone('Asia/Karachi'));
        $recAddDate = $dateTime->format('Y-m-d H:i:s');

        $sql = "INSERT INTO `AgentDataRequest` (inpAgentCode, inpSecurityCode, randCode, recAddDate) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssss", $agentCode, $securityCode, $randCode, $recAddDate);
            $result = $stmt->execute();
            $stmt->close();

            if ($result) {
                $apiResult = $this->sendAgentData($agentCode, $securityCode, $randCode);
                return $apiResult;
            } else {
                return json_encode(['error' => 'Failed to insert data.']);
            }
        } else {
            return json_encode(['error' => 'Failed to prepare statement.']);
        }
    }

    // public function insertData($agentCode, $securityCode)
    // {
    //     $randCode = $this->generateRandomNumber();
    //     date_default_timezone_set('Asia/Karachi');
    //     $dateTime = new DateTime('now', new DateTimeZone('Asia/Karachi'));
    //     $recAddDate = $dateTime->format('Y-m-d H:i:s');

    //     $sql = "INSERT INTO `AgentDataRequest` (inpAgentCode, inpSecurityCode, randCode, recAddDate) VALUES (?, ?, ?, ?)";
    //     $stmt = $this->conn->prepare($sql);
    //     if ($stmt) {
    //         $stmt->bind_param("ssss", $agentCode, $securityCode, $randCode, $recAddDate);
    //         $result = $stmt->execute();
    //         $stmt->close();

    //         if ($result) {
    //             // Fetch the inserted data (or other relevant agent data)
    //             $agentInfo = $this->getAgentInfo($agentCode);  // Assuming this method fetches agent details
    //             return json_encode(['agentInfo' => $agentInfo]);
    //         } else {
    //             return json_encode(['error' => 'Failed to insert data.']);
    //         }
    //     } else {
    //         return json_encode(['error' => 'Failed to prepare statement.']);
    //     }
    // }

    // private function getAgentInfo($agentCode)
    // {
    //     $sql = "SELECT AgentCode, AgentName, AgentDesignation, CNICdigits FROM Agents WHERE AgentCode = ?";
    //     $stmt = $this->conn->prepare($sql);
    //     if ($stmt) {
    //         $stmt->bind_param("s", $agentCode);
    //         $stmt->execute();
    //         $result = $stmt->get_result();
    //         $agentInfo = $result->fetch_assoc();
    //         $stmt->close();
    //         return $agentInfo;
    //     } else {
    //         return null;
    //     }
    // }


    public function sendPaymentData($inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode, $randCode)
    {
        $endpoint = $this->sendPaymentDataApiUrl;
        $apicode = $this->agentDataApiCode;

        $url = $endpoint . "?inpPolicyNo=" . $inpPolicyNo . "&inpCNICNo=" . $inpCNICNo . "&inpMobileNo=" . $inpMobileNo . "&inpSecurityCode=" . $inpSecurityCode . "&authCode=" . $randCode . "&apicode=" . $apicode;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);
        return $response;
    }

    public function insertPaymentData($inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode)
    {
        $randCode = $this->generateRandomNumber();
        date_default_timezone_set('Asia/Karachi');
        $dateTime = new DateTime('now', new DateTimeZone('Asia/Karachi'));
        $recAddDate = $dateTime->format('Y-m-d H:i:s');

        $sql = "INSERT INTO `KuickpayIdDataRequest` (inpPolicyNo, inpCNICNo, inpMobileNo, inpSecurityCode, randCode, recAddDate) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssssss", $inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode, $randCode, $recAddDate);

            $result = $stmt->execute();
            $stmt->close();

            if ($result) {
                $apiResult = $this->sendPaymentData($inpPolicyNo, $inpCNICNo, $inpMobileNo, $inpSecurityCode, $randCode);
                return $apiResult;
            } else {
                return json_encode(['error' => 'Failed to insert data.']);
            }
        } else {
            return json_encode(['error' => 'Failed to prepare statement.']);
        }
    }



    public function fetchPaymentData($policyNo)
    {
        $sql = "SELECT * FROM `KuickpayIdDataRequest` WHERE inpPolicyNo = ?";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $policyNo);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_assoc();
            $stmt->close();
            return $data;
        } else {
            return json_encode(['error' => 'Failed to prepare statement.']);
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
