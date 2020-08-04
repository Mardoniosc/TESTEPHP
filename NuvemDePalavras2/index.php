
<?php
?>
<style>
  a {
    text-decoration: none;
    color: green;
  }
  a:hover {
    background-color: lightgreen;
  }
</style>

<?php
function geraTags ($tags,$max) {
    $total = 0;
    $maior = 0;
    $retorno="";
    for ($i=0;$tags[$i];$i++) {
        $exp = explode(":",$tags[$i]);
        $tag[$i] = $exp[0];
        $qnt[$i] = $exp[1];
        $total = $total+$qnt[$i];
        
        if ($qnt[$i] > $maior) $maior = $qnt[$i];
    }
    for ($i=0;$tag[$i];$i++) {
        $size = round($max*$qnt[$i]/$maior);
        $menor = $max/3;
        if ($size<$menor) $size=$menor;
        $retorno.= "<a href='#'><span style='font-size:$size"."px'>$tag[$i]</span></a>&nbsp; ";
    }
    return $retorno;
}
$tags=array("php:5","java:6","html:2","programacao:4","javascript:3","humor:1","internet:1","fotos:3","linux:7","shell-script:3","livros:2","musica:2","videos:1","jogos:4","windows:5","php:5","java:6","html:2","programacao:4","javascript:3","humor:1","internet:1","fotos:3","linux:7","shell-script:3","livros:2","musica:2","videos:1","jogos:4","windows:5","php:5","java:6","html:2","programacao:4","javascript:3","humor:1","internet:1","fotos:3","linux:7","shell-script:3","livros:2","musica:2","videos:1","jogos:4","windows:5","php:5","java:6","html:2","programacao:4","javascript:3","humor:1","internet:1","fotos:3","linux:7","shell-script:3","livros:2","musica:2","videos:1","jogos:4","windows:5");

echo geraTags($tags,30);

?>