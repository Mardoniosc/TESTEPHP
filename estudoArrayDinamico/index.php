<?php
  $postsSelecionadosRelatorio = array();
  var_dump($postsSelecionadosRelatorio);

  function adicionarDeletarArray($array, $item){
    $key = array_search($item, $array);
    if($key !== false){
      unset($array[$key]);
    } else {
      array_push($array, $item);
    }
    var_dump($array);
    return $array;
  }

  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, 'zxcvzxcvzxcv');
  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, '65456456415');
  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, 'erererer');
  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, '2134235654234');
  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, 'zxcvzxcvzxcv');
  $postsSelecionadosRelatorio = adicionarDeletarArray($postsSelecionadosRelatorio, 'erererer');

  var_dump($postsSelecionadosRelatorio);


?>