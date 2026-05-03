<?php
$result = false;

if (isset($_POST['email'])) {
    // Strip newlines to prevent email header injection
    $email = str_replace(["\r", "\n"], '', $_POST['email']);
    $place = strip_tags($_POST['place'] ?? '');
    $problem = strip_tags($_POST['problem'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "0";
        exit;
    }

    $message[] = sprintf('FROM: %s', $email);
    $message[] = sprintf('Místo: %s', $place);
    $message[] = $problem;

    $headers = 'From: zeptejtese@adelaruda.cz' . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    $result = mail(
        'info@adelaruda.cz',
        'kontakt z webu',
        implode(PHP_EOL, $message),
        $headers
    );
}

echo $result ? '1' : '0';
