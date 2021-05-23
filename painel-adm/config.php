


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
                <input type="text" class="form-control form-control-md" id="previsao_minutos" name="previsao_minutos" placeholder="Previsão de Entrega" required value="<?php echo @$previsao_minutos ?>">

              </div>
            </div>

            <div class="col-md-12">
             <div class="form-group">
              <label class="text-dark" for="exampleInputEmail1">Taxa de Entrega: (R$)</label>
              <input type="text" class="form-control form-control-md" id="taxa_entrega" name="taxa_entrega" placeholder="Valor da Taxa de Entrega" value="<?php echo @$taxa_entrega ?>">

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



$taxa_entrega = $_POST['taxa_entrega'];
$previsao_minutos = $_POST['previsao_minutos'];




$res = $pdo->prepare("UPDATE config set taxa_entrega = :taxa_entrega, previsao_minutos = :previsao_minutos where id = :id");

    $res->bindValue(":taxa_entrega", $taxa_entrega);
    $res->bindValue(":previsao_minutos", $previsao_minutos);
    $res->bindValue(":id", 1);
    

    $res->execute();
    


   

    echo "<script language='javascript'>window.location='index.php'; </script>";


} ?>