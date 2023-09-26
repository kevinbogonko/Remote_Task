
<?php
$recipients = [254703583375, 254759350810];

foreach($recipients as $recipient){

    $username = "dev_bogonko";
    $Key = "izaxKBkdwiwYoYmzhSETdI6QBXAMk0jTm8q0MYFBNuk6zeMVOw";
    $senderId = "SMARTLINK";
    $tophonenumber = $recipient;
    $finalmessage = "Good morning there! This is a php bulky SMS interface test by Mr. Kimaru. :) *456*9*5#";

    $url = "https://sms.movesms.co.ke/api/compose?";
    $postData = array(
        'username' => $username,
        'api_key' => $Key,
        'sender' => $senderId,
        'to' => $tophonenumber,
        'message' => $finalmessage,
        'msgtype' => 5,
        //normal message
        'dlr' => 0,
        //no delivery report
);


$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData

)
);


curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$output = curl_exec($ch);
echo 'SMS SENT SUCCESSFULLY!!!';

if (curl_errno($ch)) {
    // echo 'error:' . curl_error($ch);
    $output = curl_error($ch);
}

curl_close($ch);

}
?>