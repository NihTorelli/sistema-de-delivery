<?php

    $email_adm = 'burgertorelli@gmail.com';
    $url_site = 'http://localhost/delivery/';

    //DADOS PARA CONEXÃO COM BD LOCAL
    $banco = 'delivery';
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';

    
    
    //CONFIGURAÇÕES PARA PAGINAÇÃO DE ITENS NO PAINEL
    //VALOR PADRÃO PARA AS PAGINAÇÕES
    $itens_por_pagina = 5;

    //VALORES QUE O USUÁRIO PODE DEFINIR PARA PAGINAÇÃO
    $itens_por_pagina_1 = 5;
    $itens_por_pagina_2 = 10;
    $itens_por_pagina_3 = 20;


    //VARIAVEIS PARA O PEDIDO
    $res2 = $pdo->query("SELECT * from config where id = 1");
    $dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
    $linhas = count($dados2);
    if($linhas == 0){
        $pdo->query("INSERT into config (previsao_minutos, taxa_entrega) values (40, 10)");
    }else{
        $previsao_minutos = @$dados2[0]['previsao_minutos'];
        $taxa_entrega = @$dados2[0]['taxa_entrega'];
    }

    

?>