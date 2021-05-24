<?php 

require_once("../../conexao.php");
$pagina = 'pedidos';


@session_start();
$cpf_cliente = @$_SESSION['cpf_usuario'];


echo '
<div class="order">
          <h2>Carrinho</h2>

          <ul class="order-list mt-4">';

                        

            $total;
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


              echo '

              <li><img src="images/produtos/<?php echo $imagem ?>"><h4>'.$quantidade.' - ' .$nome_produto.'</h4><h5>'.$total_item.'</h5></li>';


             } 
			 echo '

          </ul>

          </div>

';



?>