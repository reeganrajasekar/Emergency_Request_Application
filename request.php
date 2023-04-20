<?php 
require("./admin/layout/db.php");

$id = $_COOKIE["id"];
$name = $_COOKIE["name"];
$service = $_GET["service"];
$data = $_GET["data"];
$lan = $_GET["lan"];
$lat = $_GET["lat"];

$sql = "INSERT INTO em(userid,username,service,data,lan,lat) VALUES('$id','$name','$service','$data','$lan','$lat');";

try {
    $conn->query($sql);
    $service_plan_id = "5938c6a4ea71401aa5598dfc92a73c30";
    $bearer_token = "86d6fae8f6e24e548179aa01368d6791";
    $result1 = $conn->query("SELECT * FROM users WHERE id='$id'");
    while($row=$result1->fetch_assoc()){
        $recipient_phone_numbers = "91".$row["gmobile"]; 
    }
    $send_from = "447520651791";
    //Any phone number assigned to your API
    //May be several, separate with a comma ,
    $message = "{$name} is requested {$service}-{$data} . Location: https://www.google.com/maps?q={$lat},${lan}";

    // Check recipient_phone_numbers for multiple numbers and make it an array.
    if(stristr($recipient_phone_numbers, ',')){
    $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
    }else{
    $recipient_phone_numbers = [$recipient_phone_numbers];
    }

    // Set necessary fields to be JSON encoded
    $content = [
    'to' => array_values($recipient_phone_numbers),
    'from' => $send_from,
    'body' => $message
    ];

    $data = json_encode($content);

    $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
    curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);

    if(curl_errno($ch)) {
        echo("o");
    } else {
        echo("1");
    }
    curl_close($ch);

} catch (Exception $e) {
    echo("o");
}
?>