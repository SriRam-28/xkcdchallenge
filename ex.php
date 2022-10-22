<?php
$mailacc = "198034@nith.ac.in";

$subject = "Hello";

$message = "
<html>
<head>
  <title>Test Mail</title>
</head>
<body>
    <p><a href='https://testsitetelugu37.000webhostapp.com/unsubsrcibe.php'>Open Link</a></p>
</body>
</html>
";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: 198034@nith.ac.in' . "\r\n";

$mail = mail($mailacc, $subject, $message, $headers);


if($mail=true){
    echo 'sent';
}
else echo 'false';
?>