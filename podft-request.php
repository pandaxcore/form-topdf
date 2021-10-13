<?php
$inn = $_POST['iin'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.datalab.kz/v2/podft',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "Username": "uk@icn.kz",
    "Password": "TestPassw0rd",
    "Authorization": "Basic dXNlckBledGFtcGxlLmNvbTpwYXNzd29yZA==",
    "IIN": "'.$iin.'"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic dWtAaWNuLmt6OlRlc3RQYXNzdzByZA==',
    'Content-Type: application/json',
    'Cookie: laravel_session=ca200fcfb5b642b11c2dc6f23a697a1871b9c6cf%2BrTaaXMcTNKiJHIV7kmSpe3NPCf0k6NwOp5GQagI5; session_payload=3f2754f2a50a6f33b8d683a8df14488bd9f6e19d%2Bz%2FkJ7q4ADthg%2BBoh%2BGkBHOxOYLX13x1EyLKnpm%2FpqZ09JmfaF4vmpNvjmnQd8pfVxRRKIjZdy7VyBICEZLKkJqJUTUly8zvSle1r%2Fpc3sfg3QCZ7x8O5gtA2DWQ4rR8d3D7pcGqV5NelnS4MASsv%2F31FcflkZu3fi2vY%2BXtRrHAVLAh1oRKEWvbGrNrixFhoYJHQpcGVIXEqrBbbTq5Umjc9ZPMZBEltzWeqNPicPMMncs0e14h0vkEr%2Bh%2FECdWrZhczwpz2ZhJ%2FMkIcQCneKcALKwfkKHhVwmJXTcBJg7GKz8E7D5FDS4DN3HatTrsk7G9%2B1TcYVmq%2FuvUaIl4g1C29FBE28iE4Eo7DXGng8IUIaoOOuvnFufvXQTrCqJVGqqJLCuoc%2Fz1TViI5aAJMde5GreeChvVLQT%2B6LTu73nA%3D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
