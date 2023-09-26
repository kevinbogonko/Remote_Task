<?php
    $BAL_URL ="https://sms.movesms.co.ke/api/balance?api_key=SbhCQIrXjvrDUawwApLopbHUEiRf51gX801v3QybJXOElRYiQ8";


    $username = "dev_bogonko";
    $Key = "izaxKBkdwiwYoYmzhSETdI6QBXAMk0jTm8q0MYFBNuk6zeMVOw";
    $senderId = "SMARTLINK";
    $tophonenumber = "+254743917360";
    $finalmessage = urlencode("Good afternoon there! This is a php bulky SMS interface test by Mr. Kimaru. :) *456*9*5#");
    $live_url = "https://sms.movesms.co.ke/api/compose?username = ".$username."&api_key=".$Key."&sender=".$senderId.
    "&to=".$tophonenumber."&message=".$finalmessage."&msgtype=5&dlr=0";
    $parse_url = file($live_url);

    $output = $parse_url[0];
?>