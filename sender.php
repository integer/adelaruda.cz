<?php
$result = false;
if (isset($_POST['email'])) {
    //
    $message[] = sprintf('FROM: %s', $_POST['email']);
    $message[] = sprintf('Místo: %s', $_POST['place']);
    $message[] = $_POST['problem'];

    $headers = 'From: zeptejtese@adelaruda.cz' . "\r\n" .
        'Reply-To: zeptejtese@adelaruda.cz' . "\r\n";

    $result = mail(
        "info@adelaruda.cz", 
        "kontakt z webu", 
        implode(PHP_EOL, $message),
        $headers
    );
}

echo $result ? "1" : "0";