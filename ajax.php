<?php
include $_SERVER['DOCUMENT_ROOT'] . '/framework/init.php';

use Twilio\TwiML\VoiceResponse;
use Twilio\Rest\Client;

/** @var string $action Ajax action */
$action = $_REQUEST['action'];
if ($action === 'call') {
    // Your Account Sid and Auth Token from twilio.com/user/account
    $sid = $_SESSION['twilio']['account_sid'];
    $token = $_SESSION['twilio']["auth_token"];
    try {
        $client = new Client($sid, $token);
        $call = $client->calls->create(
            $_SESSION['twilio']['user_number'],
            $_SESSION['twilio']['twilio_number'],
            [
                'url' => 'http://' . $_SERVER['HTTP_HOST'] . '/ajax.php?action=twilio'
            ]
        );
        echo $call->sid;
    } catch (\Throwable $e) {
        // Logging
    }
}

if ($action === 'twilio') {
    /** @var string $startMessage Initial message */
    $startMessage = 'Thanks for contacting True Care 24.';
    /** @var string $finalMessage Final message */
    $finalMessage = 'Goodbye';

    try {
        $twiml = new VoiceResponse();
        $twiml->say($startMessage, array('voice' => 'man'));
        $dial = $twiml->dial($_SESSION['twilio']['admin_number']);
        $dial->setTimeout(50);
        $twiml->say($finalMessage, array('voice' => 'man'));
    } catch (\Throwable $e) {
        // Logging
    }

    header('Content-Type: text/xml');
    echo $twiml;
}

exit;