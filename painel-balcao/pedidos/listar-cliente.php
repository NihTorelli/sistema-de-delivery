<?php 

require_once("../../conexao.php");
$pagina = 'pedidos';



$id = $_POST['id'];


echo '
<div class="order">
          

          <ul class="order-list mt-4">';

                        

		  	$res = $pdo->query("SELECT * from carrinho where id_venda = '$id_venda' order by id asc");
		  	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		  	$linhas = count($dados);
            for ($i=0; $i < count($dados); $i++) { 
              foreach ($dados[$i] as $key => $value) {
              }

              $id_produto = $dados[$i]['id_produto']; 
              $quantidade = $dados[$i]['quantidade'];
              $id_carrinho = $dados[$i]['id'];


              $res_p = $pdo->query("SELECT * from produtos where id = '$id_produto' ");
              $dados_p = $res_p->fetchAll(PDO::FETCH_ASSOC);
              $nome_produto = $dados_p[0]['nome'];  
              $valor = $dados_p[0]['valor'];
              $imagem = $dados_p[0]['imagem'];
			  $total_item = $valor * $quantidade;
			  $total_item = number_format($total_item, 2, ',', '.');


              echo '

              <li><img src="../images/produtos/'.$imagem.'" width="30">
              <h4>'.$quantidade.' - ' .$nome_produto.'</h4><h5>'.$total_item .'</h5></li>';



             } 
			 echo '

          </ul>

          </div>

';



?>