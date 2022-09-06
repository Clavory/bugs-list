<?php
$client = new Client();
$headers = [
  'Authorization' => '{{JEj5D98Pce_uCP8jmVkFNDw0HuXwUb7Q}}',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "Clavory",
  "password": "secret123",
  "real_name": "Nathaniel T. Allapitan",
  "email": "allapitan.nathaniel@.auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', MANTISHUB_URL. '/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
