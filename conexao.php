<?php

include_once("config.php");

date_default_timezone_set('America/Sao_Paulo');

try{
    $pdo = new PDO("mysql:dbname=$banco;host=$host", $usuario, $senha);
} catch(Exception $e){
    echo "Erro ao conectar com o banco de dados! ".$e;
}

//VARIÁVEIS GLOBAIS QUE VEM DO BANCO

//VARIAVEIS PARA O PEDIDO
$res2 = $pdo->query("SELECT * from config where id = 1");
$dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados2);
if($linhas == 0){
    $pdo->query("INSERT into config (previsao_minutos, taxa_entrega, abertura, fechamento) values (40, 10, '11:00', '00:00')");
}else{
    $previsao_minutos = @$dados2[0]['previsao_minutos'];
    $taxa_entrega = @$dados2[0]['taxa_entrega'];
}

?>