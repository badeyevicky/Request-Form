<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$Option=$_POST['app']['Sofftware'];
$message=$_POST['Message'];

$email_subject="new form submission";

$email_body="User Name: $name.\n".
              "User Email: $email.\n".
                "User Option: $Option.\n".
                 "User Message: $message.\n";

$to ="420hackernoob@gmail.com";
$headers="From: bad420eye@gmail.com \r\n";

mail($to,$email_subject,$email_body,$headers)
header("Location: index.html");
?>
