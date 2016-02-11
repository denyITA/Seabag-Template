<?php
/*
Template Name: Company page
*/
?>

<?php get_header() ?>


<div class="topbar">
	<div class="logo">

	</div>
	<div class="fakenav"></div>
	<nav class="navbar navbar-fixed-top gradient"><div class="navbar-header"><a class="navbar-brand hidden-xs" href="<?php echo home_url() ?>"><img src="<?php echo get_header_image(); ?>" alt="Seabag logo"></a></div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collassa" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <nav class="collapse navbar-collapse" id="collassa">
    <ul class="nav navbar-nav navbar-right">
        <li id="lingua" class="dropdown">
            <button type="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn btn-default navbar-btn">

                <img src="
                <?php


            $bandierina = cml_get_current_language()->id;
           echo cml_get_flag_by_lang_id($bandierina, $size = "tiny");


                ?>
            "> <span class="fa fa-caret-down"></span>


            </button>
          <ul class="dropdown-menu">
              <?php
              echo do_shortcode('[cml_show_available_langs]') ?>
          </ul>
        </li>
      </ul>

            <?php wp_nav_menu(array('theme_location' => 'azienda-menu', 'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>', )) ?></nav></nav>

</div>

<div class="schiarisci hidden-xs"></div>
<img width="1767" height="1080" class="headerCompany" alt="fabbrica-seabag" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fabbrichetta.jpg">
<section>
	<div id="brandname">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h2 class="text-center">Brand</h2>

			</div>
		</div>
	</div>
	</div>
	<div class="description">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 brandDescr">
                    <?php contenuto_pagina(170) ?>
                </div>
            </div>
            <div class="row">
		<div class="col-lg-6 col-md-6 grey">
			<?php contenuto_pagina(254) ?>
		</div>
        <div class="col-lg-6 col-md-6 fronte"><img width="1118" height="1118" style="height: auto" class="lazyload" data-sizes="auto" data-src="<?php get_bloginfo("wpurl") ?>/wp-content/uploads/2015/08/d7ba25_cb8dbef06d81446a941d5852c8b57b9d.png" alt="brand"></div>

		<div class="clearfix"></div>
            </div>
	   </div>
        <div id="process">
            <div class="container">
            <div class="row processStep">
            <div class="col-lg-6 col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item lazyload" data-src="//www.youtube.com/embed/G4m3Y-ot2YY" allowfullscreen></iframe>

            </div>

            </div>
            <div class="col-lg-6 col-md-6">
                <p><?php contenuto_pagina("136") ?>
</p>
            </div>
                </div>
            <div class="processo-produttivo col-lg-12">
                        <h3><?php echo do_shortcode('[cml_text it="PROCESSO PRODUTTIVO" en="MANUFACTURING PROCESS"]') ?></h3>
                    </div>

                    <div id="processo-produttivo" class="img-process row">
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img width="600" height="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/rotoli/rotolo-anteprima.jpg" alt="Rotolo Seabag">
                            </span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img height="600" width="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/pressa/pressa-anteprima.jpg" alt="Pressa Seabag">
                            </span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img width="600" height="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/stampante/stampante-anteprima.jpg" alt="Stampante Seabag">
                            </span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img width="600" height="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/strumenti pressa/pressa-anteprima.jpg" alt="Strumenti Pressa Seabag">
                            </span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img width="600" height="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/seabag/seabag-anteprima.jpg" alt="Seabag stampate">
                            </span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <span class="album-fabbrica">
                              <img width="600" height="600" class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/company-foto/floating/floating-anteprima.jpg" alt="Seabag galleggiante">
                            </span>
                        </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section>
	<div id="staff">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h2 class="text-center">Team</h2>

			</div>
		</div>
	</div>
	</div>

	<div class="description">
		<div class="container staffImg">
			<div class="row">
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                <div class="imgWrapper">
			      <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/giuseppe.jpg" alt="Giuseppe Lucido">
			     </div>
                    <div class="caption">
			        <h3>Giuseppe</h3>
			        <p>Founder & CEO</p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                    <div class="imgWrapper">
			      <img height="800" height="800" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" class="lazyload" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/rossana.jpg" alt="Rossana Lo Dato">
			      </div>
                    <div class="caption">
			        <h3>Rossana</h3>
			        <p>Founder/ Designer</p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                   <div class="imgWrapper">
			      <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/lorenzo.jpg" alt="Lorenzo Lo Dato">
			      </div>
                    <div class="caption">
			        <h3>Lorenzo</h3>
			        <p>Architectural designer</p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                   <div class="imgWrapper">
			         <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/pub_rel.jpg" alt="Marilù">
			      </div>
                    <div class="caption">
			        <h3>Marilù</h3>
			        <p>Public relations/ Designer</p>
			      </div>
			    </div>
			  </div>
			  <div class=" col-sm-6 col-md-3">
			    <div class="thumbnail">
                    <div class="imgWrapper">
                        <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/politi.jpg" alt="Lorenzo Politi">
			         </div><div class="caption">
			        <h3>Lorenzo</h3>
			        <p>Product manager/Designer</p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                    <div class="imgWrapper">
                        <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/johanna.jpg" alt="Johanna Chmarzewska">
			         </div>
                 <div class="caption">
			        <h3>Joanna</h3>
			        <p>Sales manager U.S.A.</p>
			     </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
                    <div class="imgWrapper">
                        <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/operaio.jpg" alt="Paolo">
			         </div>
                    <div class="caption">
			        <h3>Paolo</h3>
			        <p>Quality control</p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <div class="imgWrapper">
                    <img height="800" height="800" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lazyload.png" data-src="<?php get_bloginfo("site") ?>/wp-content/uploads/2015/08/operaio-2.jpg" alt="Francesco">
                    </div>
			      <div class="caption">
			        <h3>Francesco</h3>
			        <p>Controller production</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>


</section>
<section>
<div id="retail">
	<div class="container">
		<div class="row">
            <div class="col-lg-12"><h2 class="text-center">Distributors</h2>
			</div>
		</div>
	</div>
</div>
<div class="description">
<div class="container">
    <div class="row">
        <div class="clearfix"></div>
    </div>
    <div class="row">
            <?php dynamic_sidebar( 'retail_tab' ); ?>
            <div class="clearfix"></div>
    </div>
    <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="retailer tableRetail-1">

                    <div class="nation"><span>U</span><span>S</span><span>A</span></div>
                    <span id="formUs"></span>
                    <span class="shopAvailable"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="retailer tableRetail-2">

                    <div class="nation"><span>A</span><span>U</span><span>S</span></div>
                    <span class="formNotUs"></span>
                    </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="retailer tableRetail-3">

                    <div class="nation"><span>M</span><span>E</span><span>X</span></div>
                    <span class="formNotUs"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="retailer tableRetail-4">

                    <div class="nation"><span>D</span><span>E</span><span>N</span></div>
                    <span class="formNotUs"></span>

                </div>
            </div>

    </div>
</div>
</div>
<div id="pressExtended" style="display: none">
        <div class="pressOverlay">
            <span class="noAwards cerchioX"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
    <div class="container">
        <h2 class="theTitle">Contact Form</h2>
    </div>
    <div class="container">

        <div class="col-lg-12">
            <div id="usa"><?php echo do_shortcode('[contact-form-7 id="251" title="Distributors no usa"]') ?></div>
            <div id="notUsa"><?php echo do_shortcode('[contact-form-7 id="244" title="Distributors"]') ?></div>
        </div>
    </div>


</div>

</section>
<!-- Modal Shop-->
<div class="modal fade" id="shopChoose" tabindex="-1" role="dialog" aria-labelledby="shopChoose">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
         ?></span>
      </div>
      <div class="modal-body text-center">
      <div><?php
                if (cml_get_current_language()->cml_locale === "it_IT")  {
                    echo "Puoi acquistare i nostri prodotti da qualsiasi Continente utilizzando la valuta del tuo Paese. Clicca invia e verrai reindirizzato allo shop on-line più vicino a te.<br>";
                }
      ?>
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
