<?php

  function returnResponse($url, $metodo){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMEREQUEST, 'GET');
    return json_decode(curl_exec($ch));
  }

  $url = 'http://localhost:8080/usuarios';

  $metodo = 'GET';

  $response = returnResponse($url, $metodo);
  foreach($response as $user){
    echo "<br>";
    echo "Nome: " . $user->nome . "<br>";
    echo "<hr>";
    
    echo "E-mail: " . $user->email . "<br>";
    echo "<hr>";
    
    echo "CPF: " . $user->cpf . "<br>";
    echo "<hr>";
    
  }
?>