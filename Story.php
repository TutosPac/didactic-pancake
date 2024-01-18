<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.textcortex.com/v1/texts/blogs",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"context\": \"Historia de terror basada en la cultura tradicional japonesa\",\n  \"keywords\": [\n    \"yakuza, japon, asia, tradicional\"\n  ],\n  \"max_tokens\": 512,\n  \"model\": \"gpt-3.5-turbo-16k\",\n  \"n\": 5,\n  \"source_lang\": \"es\",\n  \"target_lang\": \"es\",\n  \"temperature\": 0.65,\n  \"title\": \"Un monstruo Japones\"\n}",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer gAAAAABlnUxU1avIommAxlyI7Pp8bGp83vyNc8qL0sUUgZCN0iu2VDlTT9jHRvMMPPCCEWeLk7HMSxypQePOdi2KHREh6uSXE0g6LszlWAPtXK1IRKTqiCSf2PsDeUbihfpR2mWZYsHY",
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}