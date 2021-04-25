<?php include_once("cabecalho.php"); ?>
      
      <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5514998988662">(14) 99898-8662</a></p>                  
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a target="_blank" href="https://www.google.com.br/maps/place/R.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115/@-22.8980599,-48.4507663,17z/data=!4m13!1m7!3m6!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!2sR.+Jos%C3%A9+Campos+Aranha,+40+-+Conj.+Res.+Frei+Fidelis,+Botucatu+-+SP,+18606-115!3b1!8m2!3d-22.8980649!4d-48.4485776!3m4!1s0x94c6df72a95267d5:0x8da0a7db08c83ec6!8m2!3d-22.8980649!4d-48.4485776">Rua José de Campos Aranha, 40 - Cecap 18606-115</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:nicolas.torelli@fatec.sp.gov.br">nicolas.torelli@fatec.sp.gov.br</a></p>                  
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form and Gmap-->
      <section class="section section-md section-last bg-default text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.414840939896!2d-48.45076628503467!3d-22.898064885016264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6df72a95267d5%3A0x8da0a7db08c83ec6!2sR.%20Jos%C3%A9%20Campos%20Aranha%2C%2040%20-%20Conj.%20Res.%20Frei%20Fidelis%2C%20Botucatu%20-%20SP%2C%2018606-115!5e0!3m2!1spt-BR!2sbr!4v1619226993222!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Contate-nos</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviar.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" placeholder="Nome e Sobrenome" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nome</label>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="telefone" type="telefone" name="telefone">
                      <label class="form-label" for="telefone">WhatsApp</label>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Mensagem</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Enviar Mensagem</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php include_once("rodape.php"); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="js/mascaras.js"></script>

