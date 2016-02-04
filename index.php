<?php get_header() ?>

<section id="seabagInfo">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div id="banda1" onclick="ga('send', 'event', 'Sezione', 'click', 'Cosa è');" class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
          <b class="bgCover" style="background:url(<?php copertina_pagina(13) ?>)"></b>
          <span><?php titolo_pagina(13) ?></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       <?php contenuto_pagina(13) ?>
      </div>
    </div>
  </div>
  <div id="banda2" onclick="ga('send', 'event', 'Sezione', 'click', 'A cosa serve');" class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <b class="bgCover" style="background:url(<?php copertina_pagina(15) ?>)"></b>
          <span><?php titolo_pagina(15) ?></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php contenuto_pagina(15) ?>
      </div>
    </div>
  </div>
  <div id="banda3" onclick="ga('send', 'event', 'Sezione', 'click', 'A chi è utile');" class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <b class="bgCover" style="background:url(<?php copertina_pagina(18) ?>); background-position: right top !important"></b>
          <span><?php titolo_pagina(18) ?></span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      <?php contenuto_pagina(18) ?>
      </div>
    </div>
  </div>
  <div id="banda4" onclick="ga('send', 'event', 'Sezione', 'click', 'Sundial');" class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingFour">

      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

    <i class="sad">
        <i class="tpbg">
            <i class="cerchiopiccolo"></i>
            <i class="cerchiogrande"></i>
        </i>
    </i>
          <small class="piu">Towel</small>
          <b class="bgCover" style="background:url(<?php copertina_pagina(51) ?>); background-position: center center !important"></b>
          <span><?php titolo_pagina(51) ?></span>

        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      <?php contenuto_pagina(51) ?>
      </div>
    </div>
  </div>
</div>

</section>

  <section id="aboutus">
   <?php get_template_part("dicono") ?>
    <aside class="more text-center">
      <span id="awards">
        <a  class="showAwards btn btn-awards"><?php echo read_more() ?></a>
      </span>
    </aside>
    <div class="openedPress">

      <div id="copertine">
          <div class="openTab">

            <div class="container" style="padding-top: 20px; padding-bottom: 20px">
              <?php get_template_part("scaffale-1") ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="oddTab openTab">
              <div class="container" style="padding-top: 20px; padding-bottom: 20px">

                  <div class="col-lg-12">
                      <?php get_template_part('scaffale-2') ?>
                  </div>
                  <div class="clearfix"></div>
              </div>
            </div>
      </div>

    </div>
  </section>
  <section id="pride">
    <div class="container-fluid">
      <div class="row">
          <div class="premi">
            <h3><?php titolo_pagina(235) ?></h3>
          </div>
          <div class="openPremi">
              <span class="openPrize"><i class="fa fa-angle-down"></i></span>
          </div>
      </div>
    </div>
    <div class="openedPrizes">
      <div id="trofei">
        <div class="openTab">
            <div class="container" style="padding-top: 20px; padding-bottom: 20px">
                <div class="col-lg-12">
                    <?php contenuto_pagina(240) ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
      </div>
    </div>
  </section>

<!-- LIBRERIA -->

  <div id="media" class="album">
      <?php get_template_part("album") ?>
  </div>
  <section>
    <div id="sponsor"><?php get_template_part('sponsor') ?></div>
  </section>

  <!-- Modal Shop-->
  <div class="modal fade" id="shopChoose" tabindex="-1" role="dialog" aria-labelledby="shopChoose">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <span class="modal-title">
           <?php
                  if (cml_get_current_language()->cml_locale === "it_IT")  {
                      echo "Seleziona il tuo paese";
                      $chiudi = "Chiudi";
                  }
                  else {
                      echo "Select your country";
                      $chiudi = "Close";
                  }
           ?>
          </span>
        </div>
        <div class="modal-body text-center">
          <div>
            <?php
                  if (cml_get_current_language()->cml_locale === "it_IT")  {
                      echo "Puoi acquistare i nostri prodotti da qualsiasi Continente utilizzando la valuta del tuo Paese. Clicca invia e verrai reindirizzato allo shop on-line più vicino a te.<br>";
                  } ?>
          </div>
          <div>
            <form action="<?php echo get_stylesheet_directory_uri(); ?>/choose.php" method="get">
              <select id="selezionaShop" class="btn btn-default dropdown-toggle" name="array_languages">


              </select>
              <input type="submit" class="showAwards btn btn-awards">
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $chiudi;  unset($chiudi) ?></button>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>

