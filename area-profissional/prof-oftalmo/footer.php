<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.4
 *
 *
 */


?>

        </div>
	</div>
</div>
	<?php if (is_page(15660) || is_page(15694) || is_page(15806) || is_page(15804))  { ?>

  <?php } else { ?>
    <?php get_template_part('template-parts/logos'); ?>
    <footer>
        <div class="bg-primary">
            <div class="container py-5">
                <div class="justify-content-center justify-content-lg-between row gy-4 align-items-center">
                    <div class="col-md-6 d-md-block">
                        <?php echo wp_get_attachment_image( 13893, 'full', "", ["class" => "img-fluid"]); ?>
                        <div class="row mt-4 justify-content-center justify-content-lg-start align-items-center">
                            <div class="col-4 col-md-6 col-lg-4">
                                <?php echo wp_get_attachment_image( 16033, 'full', "", ["class" => "img-fluid", "style" => "width: 160px ;"]); ?>
                            </div>
                            <div class="col-4 col-md-6 col-lg-4">
                                <?php echo wp_get_attachment_image( 16032, 'full', "", ["class" => "img-fluid", "style" => "width: 165px ;"]); ?>
                            </div>
                            <div class="col-4 col-md-6 col-lg-3">
                                <?php echo wp_get_attachment_image( 15768, 'full', "", ["class" => "img-fluid"]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 d-md-flex flex-md-column align-items-md-end text-white">
                        <div class="text-center text-md-start">
                            <p class="fw-bold mb-2 d-block pb-0">Ambulatório</p>
                            <a href="https://maps.app.goo.gl/DqSRK2onieFskSoS6" target="_blank" class="text-white fw-light">
                                <p class="lh-base mx-auto mx-md-0 mb-3" style="max-width: 300px;">Rua Botucatu, 821 - Vila Clementino, 04023-062 - São Paulo - SP</p>
                            </a>
                            <div class="justify-content-center justify-content-lg-start row gy-2    ">
                                <div class="col-auto">
                                    <a href="https://www.google.com/maps/dir//Sociedade+Brasileira+de+Oftalmologia+Pedi%C3%A1trica+-+SBOP+-+R.+Casa+do+Ator,+1117+-+Conjunto+21+-+Vila+Ol%C3%ADmpia,+S%C3%A3o+Paulo+-+SP,+04546-004/@-23.5842132,-46.6887044,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce57227f736ad3:0x91c99ed6f84aa0df!2m2!1d-46.6837812!2d-23.5969425?entry=ttu" target="_blank" class="btn btn-secondary link-light">Maps</a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://www.waze.com/pt-PT/live-map/directions/br/sp/r.-casa-do-ator,-1117?to=place.ChIJ1y_Pwk5XzpQRuiwFRH85DZ0" target="_blank" class="btn btn-outline-secondary link-light">Waze</a>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center justify-content-lg-start">
                                <?php get_template_part('template-parts/social'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: #074139;">
            <div class="container">
                <p class="text-center text-white py-3 small">© Copyright 2014 - <?php echo date('Y'); ?> Oftalmologia EPM. Todos os Direitos Reservados | Responsável técnico: Dr Ivan M. Tavares CRM-SP 102.472 RQE 20.323</p>
            </div>
        </div>
    </footer>

  <?php } ?>


<?= get_template_part('inc/modal-retorno'); ?>

<?php wp_footer(); ?>
</body>
</html>
