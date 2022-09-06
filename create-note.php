<?php
$client = new Client();
$headers = [
  'Authorization' => '{{JEj5D98Pce_uCP8jmVkFNDw0HuXwUb7Q}}',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "allapitan.nathaniel@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', MANTISHUB_URL. '/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
