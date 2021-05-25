<!-- Main content -->
<?php
        

        $res_count_cli = $pdo->query("SELECT * from clientes");
        $dados_count_cli = $res_count_cli->fetchAll(PDO::FETCH_ASSOC);

        $res_count_pedidos = $pdo->query("SELECT * from vendas where data = curDate()");
        $dados_count_pedidos = $res_count_pedidos->fetchAll(PDO::FETCH_ASSOC);

        $res_count_abertos = $pdo->query("SELECT * from vendas where pago = 'Não' and data = curDate()");
        $dados_count_abertos = $res_count_abertos->fetchAll(PDO::FETCH_ASSOC);        

?>



<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Clientes</span>
                <span class="info-box-number">
                  <?php echo count($dados_count_cli) ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pedidos de Hoje</span>
                <span class="info-box-number"><?php echo count($dados_count_pedidos) ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-truck-loading"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Entregas em Aberto</span>
                <span class="info-box-number"><?php echo count($dados_count_abertos) ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Vendido</span>
                <span class="info-box-number">R$800,00</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->