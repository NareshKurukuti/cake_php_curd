<?php
$to = "naresh.k@e-commsys.com.au";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" ;
$email = mail($to,$subject,$txt,$headers);
if($email) {
    echo "success";
}else {
    echo "fail";
}

?>