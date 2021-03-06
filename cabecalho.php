<?php @session_start();
include_once("conexao.php");
 ?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">
  <head>
    <title>Delivery Torelli</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Trabalho de Conclusão de Curso, Análise e Desenvolvimento de Sistemas da Faculdade de Tecnologia de Botucatu, Fatec">
    <meta name="author" content="Nicolas Torelli">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a title="Ir para Página Inicial" class="brand" href="index.php"><img src="images/logo-default-196x47.png" alt="" width="196" height="47"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Basket-->
                    <div class="rd-navbar-basket-wrap">
                      <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inline"><span id="total_itens_3">2</span></button>
                      <div class="cart-inline">
                        <div class="cart-inline-header">
                          <span class="dados-usuarios">
                          <p><a href="dados-editar" title="Editar Perfil">
                            <?php echo @$_SESSION['nome_usuario']; ?>
                            </a>
                          <a href="logout.php" title="Sair">
                            <img src="images/logout.png" width="20px">
                          </a></i></p></span>
                          <h5 class="cart-inline-title">Carrinho:<span id="total_itens_2" class="ml-1"></span> Produto(s)</h5>
                          <input type="hidden" id="txtquantidade">
                          
                        </div>
                        <div class="cart-inline-body">
                        <?php if(@$_SESSION['cpf_usuario'] == ''){
                          echo 'É necessário iniciar uma sessão, faça seu login clicando <strong><a class="vermelho-link" href="login" target="_blank" title="Ir para o Login"> aqui </a></strong>, caso não tenha login faça seu cadastro!';

                            }else{ ?>
                            <div id="listar-carrinho-cab">
                            
                            </div>
                          <?php } ?>
                        </div>                        
                          
                        
                      </div>
                    </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="#"><span>2</span></a>
                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="produtos.php">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Procurar...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="buscar">
                          <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                        </div>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Início</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="sobre">Sobre</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="categorias">Categorias</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="produtos">Produtos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="combos">Combos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contatos">Contatos</a>
                      </li>
                      <?php if(!isset($_SESSION['nome_usuario'])){
                        echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="login">Login</a>
                      </li>';
                      }else {
                        if ($_SESSION['nivel_usuario'] == 'Cliente'){
                          echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="painel-cliente">Painel</a>
                          </li>';
                        }

                        if ($_SESSION['nivel_usuario'] == 'Admin'){
                          echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="painel-adm">Painel</a>
                          </li>';
                        }

                        if ($_SESSION['nivel_usuario'] == 'Balconista'){
                          echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="painel-balcao">Painel</a>
                          </li>';
                        }
                      } ?>
                    </ul>
                  </div>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                    <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                    </div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project rd-navbar-modern-project">
                  <div class="rd-navbar-project-modern-header">
                    <h4 class="rd-navbar-project-modern-title">Contate-nos</h4>
                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                    <div>
                      <p>Siga-nos em nossas redes sociais e fique por dentro das promoções, participe para ganhar prêmios e grandes descontos!!</p>
                      <p>Atendemos todos os dias das <?= date('H:i', strtotime($abertura)) ?> até às <?= date('H:i', strtotime($fechamento)) ?> </p>                     
                      
                      <ul class="rd-navbar-modern-contacts">
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fab fa-whatsapp"></span></div>
                            <div class="unit-body"><a target="_blank" title="Ir para o Whatsapp" class="link-phone" href="http://api.whatsapp.com/send?1=pt_BR&phone=5514998988662">14 99898-8662</a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                            <div class="unit-body"><a target="_blank" class="link-location" href="https://www.google.com.br/maps/place/R.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115/@-22.8980599,-48.4507663,17z/data=!4m13!1m7!3m6!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!2sR.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115!3b1!8m2!3d-22.8980649!4d-48.4485776!3m4!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!8m2!3d-22.8980649!4d-48.4485776">Rua José de Campos Aranha, 40 - Cecap 18606-115</a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                            <div class="unit-body"><a class="link-email" href="mailto:#">nicolas.torelli@fatec.sp.gov.br</a></div>
                          </div>                          
                        </li>                        
                      </ul>
                      <ul class="list-inline rd-navbar-modern-list-social">
                        <li><a target="_blank" title="Ir para nossa página no Facebook" class="icon fa fa-facebook" href="https://www.facebook.com/nicolas.torelli.7503/"></a></li>
                        <li><a target="_blank" title="Ir para nossa página no Twitter" class="icon fa fa-twitter" href="https://twitter.com/nih_torelli"></a></li>                        
                        <li><a target="_blank" title="Ir para nossa página no Instagram"class="icon fa fa-instagram" href="https://www.instagram.com/torellinicolas/"></a></li>
                        <li><a target="_blank" title="Ir para nossa página no Pinterest"class="icon fa fa-pinterest" href="https://br.pinterest.com/"></a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <?php 

        if(@$_GET['funcao'] == 'editar'){


      //CARREGAR OS DADOS DO USUÁRIO
        $cpf_cliente = @$_SESSION['cpf_usuario'];             
        $res = $pdo->query("SELECT * from clientes where cpf = '$cpf_cliente'");
        $dados = $res->fetchAll(PDO::FETCH_ASSOC);
        $nome = @$dados[0]['nome'];
        $telefone = @$dados[0]['telefone'];
        $email = @$dados[0]['email'];
        $rua = @$dados[0]['rua'];
        $numero = @$dados[0]['numero'];
        $bairro = @$dados[0]['bairro'];
        $cidade = @$dados[0]['cidade'];
        $estado = @$dados[0]['estado'];
        $cep = @$dados[0]['cep'];

        $res2 = $pdo->query("SELECT * from usuarios where cpf = '$cpf_cliente'");
        $dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
        $senha = @$dados2[0]['senha'];
                
        ?>


<!--INICIO DA MODAL DE EDITAR DADOS DE USUARIO-->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Dados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="row">
              <div class="col-md-4">
               <div class="form-group">
                <label class="text-dark" for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Nome e Sobrenome" required value="<?php echo @$nome ?>">

              </div>
            </div>

            <div class="col-md-4">
             <div class="form-group">
              <label class="text-dark" for="exampleInputEmail1">CPF</label>
              <input type="text" class="form-control form-control-sm" id="cpf" name="cpf" placeholder="CPF" disabled value="<?php echo @$cpf_cliente ?>">

            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label class="text-dark" for="exampleInputEmail1">Telefone</label>
              <input type="text" class="form-control form-control-sm" id="telefone" name="telefone" placeholder="Telefone" required value="<?php echo @$telefone ?>">

            </div>

          </div>

         

      
         <div class="col-md-3">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email" required value="<?php echo @$email ?>">

          </div>

        </div>


          <div class="col-md-3">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Senha</label>
            <input type="password" class="form-control form-control-sm" id="senha" name="senha" placeholder="Senha" required value="<?php echo base64_decode(@$senha) ?>">

          </div>

        </div>

        <div class="col-md-4">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Rua</label>
            <input type="text" class="form-control form-control-sm" id="rua" name="rua" placeholder="Rua" required value="<?php echo @$rua ?>">

          </div>

        </div>


          <div class="col-md-2">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Número</label>
            <input type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="Número" required value="<?php echo @$numero ?>">

          </div>

        </div>

          <div class="col-md-3">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Bairro</label>
            
            <select class="form-control form-control-sm" id="" name="bairro" required>
                <?php 
                if (@$bairro != ''){
                  

                  echo '<option value="'.@$bairro.'">'.@$bairro.'</option>';
                }else{
                  echo '<option value="">Selecione um Bairro</option>';
                }


                //CARREGAR TODOS OS REGISTROS EXISTENTES
                $res = $pdo->query("SELECT* from locais order by nome asc");
                $dados = $res->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 0; $i < count($dados); $i++){
                  foreach ($dados[$i] as $key => $value){                      
                  }

                  $id_item = $dados[$i]['id'];
                  $nome_item = $dados[$i]['nome'];

                  if($nome_dado != $nome_item){
                    echo '<option value="'.$nome_item.'">'.$nome_item.'</option>';
                  }
                }
                ?>


                
            </select>

          </div>

        </div>

         <div class="col-md-4">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Cidade</label>
            <input type="text" class="form-control form-control-sm" id="cidade" name="cidade" placeholder="Cidade" required value="<?php echo @$cidade ?>">

          </div>

        </div>


          <div class="col-md-2">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Estado</label>
           
            <select id="estado" name="estado" class="form-control form-control-sm">
            
            <option value="SP" <?php if($estado == 'SP'){ ?> selected <?php } ?>>SP</option>
            
        
      
         
        

            </select>

          </div>

        </div>


         <div class="col-md-3">
           <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">CEP</label>
            <input type="text" class="form-control form-control-sm" id="cep" name="cep" placeholder="CEP" required value="<?php echo @$cep ?>">

          </div>

        </div>



      </div>







      <div align="center" class="" id="mensagem">
      </div>


    </div>
    <div class="modal-footer">
     <button type="button" id="btn-fechar" class="button button-md button-default-outline-2 button-wapasha" data-dismiss="modal">Fechar</button>
     <button name="btn-editar" id="btn-editar" class="button button-md button-primary button-pipaluk">Editar</button>

   </form>

 </div>
</div>
</div>
</div>
<!--FIM DA MODAL DE EDITAR DADOS DE USUARIO-->
<?php } ?>

<script>$("#modal-login").modal("show"); </script>

<?php if(isset($_POST['btn-editar'])){

  $cpf = @$_SESSION['cpf_usuario'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $telefone = $_POST['telefone'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $cep = $_POST['cep'];
  $senha = $_POST['senha'];



  
  $res = $pdo->prepare("UPDATE usuarios set nome = :nome, usuario = :usuario, telefone = :telefone, senha = :senha where cpf = :cpf");
  $res->bindValue(":nome", $nome);
  $res->bindValue(":usuario", $email);
  $res->bindValue(":cpf", $cpf);
  $res->bindValue(":senha", base64_encode($senha));

  $res->bindValue(":telefone", $telefone);

  $res->execute();




  $res = $pdo->prepare("UPDATE clientes set nome = :nome, email = :usuario, rua = :rua, telefone = :telefone, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep where cpf = :cpf");
  $res->bindValue(":nome", $nome);
  $res->bindValue(":usuario", $email);
  $res->bindValue(":cpf", $cpf);
  $res->bindValue(":rua", $rua);
  $res->bindValue(":numero", $numero);    
  $res->bindValue(":telefone", $telefone);
  $res->bindValue(":bairro", $bairro);
  $res->bindValue(":cidade", $cidade);
  $res->bindValue(":estado", $estado);
  $res->bindValue(":cep", $cep);

  $res->execute();

  echo "<script language = 'javascript'>window.location='categorias'; </script>";
  
} ?>





<!--AJAX PARA INSERÇÃO DOS DADOS VINDO DE UMA FUNÇÃO -->
<script>
function carrinhoModal(idproduto) {
  
  
     event.preventDefault();
            
            $.ajax({

                url: "carrinho/inserir-carrinho.php",
                method: "post",
                data: {idproduto},
                dataType: "text",
                success: function(mensagem){

                    $('#mensagem').removeClass()

                    if(mensagem == 'Cadastrado com Sucesso!!'){
                        atualizarCarrinho();
                       $("#modal-carrinho").modal("show");

                    }else{
                        
                       
                    }
                    
                    $('#mensagem').text(mensagem)

                },
                
            })
}
</script>







<!--AJAX PARA LISTAR OS DADOS -->
<script type="text/javascript">
  $(document).ready(function(){
    
    

    $.ajax({
      url:  "carrinho/listar-carrinho-cab.php",
      method: "post",
      data: $('#frm').serialize(),
      dataType: "html",
      success: function(result){
        $('#listar-carrinho-cab').html(result)

      },

      
    })
  })
</script>




<script>
function atualizarCarrinhoCab() {
    $.ajax({
      url:  "carrinho/listar-carrinho-cab.php",
      method: "post",
      data: $('#frm').serialize(),
      dataType: "html",
      success: function(result){
        $('#listar-carrinho-cab').html(result)

      },
     })
}
</script>



<script>
function deletarCarrinhoCab(id) {

   event.preventDefault();
            
            $.ajax({

                url: "carrinho/excluir-carrinho.php",
                method: "post",
                data: {id},
                dataType: "text",
                success: function(mensagem){

                    $('#mensagem').removeClass()

                    if(mensagem == 'Excluido com Sucesso!!'){
                        atualizarCarrinhoCab();
                       //$("#modal-carrinho").modal("show");

                    }else{
                        
                       
                    }
                    
                    $('#mensagem').text(mensagem)

                },
                
            })
   
}
</script>



<script type="text/javascript">
   function editarCarrinhoCab(id) {
        
        var quantidade = document.getElementById('txtquantidade').value;
        event.preventDefault();
            
            $.ajax({

                url: "carrinho/editar-carrinho.php",
                method: "post",
                data: {id, quantidade},
                dataType: "text",
                success: function(mensagem){

                    $('#mensagem').removeClass()

                    if(mensagem == 'Editado com Sucesso!!'){
                        atualizarCarrinhoCab();
                       //$("#modal-carrinho").modal("show");

                    }else{
                        
                       
                    }
                    
                    $('#mensagem').text(mensagem)

                },
                
            })

        
      }
</script>
