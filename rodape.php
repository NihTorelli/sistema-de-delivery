<footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
        <div class="footer-variant-2-content">
          <div class="container">
            <div class="row row-40 justify-content-between">
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <div class="footer-brand"><a href="index.html"><img src="images/logo-inverse-196x42.png" alt="" width="196" height="42"/></a></div>
                    <p>Cardápio diversificado e entregas rápidas a mais de 28 anos.</p>
                    <ul class="footer-contacts d-inline-block d-md-block">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5514998988662">(14) 99898-8662</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                          <div class="unit-body">
                            <p>Atendemos todos os dias das <?= date('H:i', strtotime($abertura)) ?> até às <?= date('H:i', strtotime($fechamento)) ?></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" target="_blank" href="https://www.google.com.br/maps/place/R.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115/@-22.8980599,-48.4507663,17z/data=!4m13!1m7!3m6!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!2sR.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115!3b1!8m2!3d-22.8980649!4d-48.4485776!3m4!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!8m2!3d-22.8980649!4d-48.4485776">Rua José de Campos Aranha, 40 - Cecap</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="oh-desktop">
                  <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                    <h5>Cadastre-se</h5>
                    <p>Insira seu e-mail abaixo para se cadastrar em nosso Sistema de Delivery.</p>
                    <form class="rd-form" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="login.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-5-email" type="email" name="email2" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-5-email">Insira seu e-mail</label>
                      </div>
                      <button class="button button-block button-white" type="submit">Cadastrar</button>
                    </form>
                    <div class="group-lg group-middle">
                      <p class="text-white">Siga-nos</p>
                      <div>
                        <ul class="list-inline list-inline-sm footer-social-list-2">
                          <li><a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/nicolas.torelli.7503/"></a></li>
                          <li><a class="icon fa fa-twitter" target="_blank" href="https://twitter.com/nih_torelli"></a></li>                          
                          <li><a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/torellinicolas/"></a></li>
                          <li><a class="icon fa fa-pinterest" target="_blank" href="https://br.pinterest.com/"></a></li>
                        </ul>
                      </div>
                      <select class="form-control form-control-sm" id="" name="bairro">
                           
                          
                        <option value="">Bairros que entregamos</option>';
                          

                          <?php
                          //CARREGAR TODOS OS REGISTROS EXISTENTES
                          $res = $pdo->query("SELECT* from locais order by nome asc");
                          $dados = $res->fetchAll(PDO::FETCH_ASSOC);

                          for ($i = 0; $i < count($dados); $i++){
                            foreach ($dados[$i] as $key => $value){                      
                            }

                            $id_item = $dados[$i]['id'];
                            $nome_item = $dados[$i]['nome'];

                            
                              echo '<option value="'.$nome_item.'">'.$nome_item.'</option>';
                            
                          }
                          ?>


                          
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xl-3">
                <div class="oh-desktop">
                  <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                    <h5>Nossas Lojas</h5>
                    <div class="row row-10 gutters-10" data-lightgallery="group">
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/galeria-loja/01-tumb.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/01.jpg" data-lightgallery="item"><img src="images/galeria-loja/01-tumb.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/galeria-loja/02-tumb.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/02.jpg" data-lightgallery="item"><img src="images/galeria-loja/02-tumb.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/galeria-loja/03-tumb.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/03.jpg" data-lightgallery="item"><img src="images/galeria-loja/03-tumb.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/galeria-loja/04-tumb.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/04.jpg" data-lightgallery="item"><img src="images/galeria-loja/04-tumb.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-variant-2-bottom-panel">
          <div class="container">
            <!-- Rights-->
            <div class="group-sm group-sm-justify">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Nicolas Torelli - Trabalho de Conclusão de Curso</span>
              </p>
              <p class="rights"><a target="_blank" href="https://www.vestibularfatec.com.br/">Faculdade de Tecnologia de Botucatu - FATEC</a></p>           
            </div>
          </div>
        </div>
</footer>