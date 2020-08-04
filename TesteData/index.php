<?php
  $data_pesquisa = date("Y-m-d H:i:s");

  $newDate = date_create($data_pesquisa);
  $newDate = date_format($newDate, 'Y-m-d');

  $dataConsulta = 'T08:00:00.000Z';
  
  echo "<br><br>";
  echo "end result: " . $newDate . $dataConsulta; 
?>