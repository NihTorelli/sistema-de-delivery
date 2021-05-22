
<?php 

  

//TRAZER OS DADOS DE CONFIGURAÇÕES
  $cpf_cliente = @$_SESSION['cpf_usuario'];
  

  $res2 = $pdo->query("SELECT * from config order by id desc limit 1");
  $dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
  $previsao_minutos = @$dados2[0]['previsao_minutos'];
  $taxa_entrega = @$dados2[0]['taxa_entrega'];

 ?>



  <div class="modal fade" id="modal-config" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Configurações</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            
              <div class="col-md-12">
               <div class="form-group">
                <label class="text-dark" for="exampleInputEmail1">Previsão de Entrega em Minutos:</label>
                <input type="text" class="form-control form-control-md" id="previsao" name="previsao" placeholder="Previsão de Entrega" required value="<?php echo @$previsao_minutos ?>">

              </div>
            </div>

            <div class="col-md-12">
             <div class="form-group">
              <label class="text-dark" for="exampleInputEmail1">Taxa de Entrega: (R$)</label>
              <input type="text" class="form-control form-control-md" id="taxa" name="taxa" placeholder="Valor da Taxa de Entrega" value="<?php echo @$taxa_entrega ?>">

            </div>
          </div>
          

        

        



      <div align="center" class="" id="mensagem">
      </div>


    </div>
    <div class="modal-footer">
     <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
     <button name="btn-editar" id="btn-editar" class="btn btn-info">Editar</button>

   </form>

 </div>
</div>
</div>
</div>

<script>$("#modal-config").modal("show"); </script>





<?php if(isset($_POST['btn-editar'])){



$taxa_entrega = @$_SESSION['taxa_entrega'];
$previsao_minutos = $_POST['previsao_minutos'];




$res = $pdo->prepare("UPDATE config set taxa_entrega = :taxa_entrega, previsao_minutos = :previsao_minutos where id = :1");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":usuario", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":senha", $senha);
   
    $res->bindValue(":telefone", $telefone);

    $res->execute();
    


   

    echo "<script language='javascript'>window.location='index.php'; </script>";


} ?>