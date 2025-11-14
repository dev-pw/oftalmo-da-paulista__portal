<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.2.0
 *
 * Website Header Template
 * Created by CMSMasters
 *
 */


$cmsmasters_option = medical_clinic_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head id="getUrl" data-url="<?php bloginfo('url'); ?>">
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<?php wp_head(); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ENWE5F63FW"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-ENWE5F63FW');
</script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('cmsmasters_before_body', $cmsmasters_option); ?>

<?php medical_clinic_get_header_search_form($cmsmasters_option); ?>

<!-- Start Page -->
<div id="page" class="<?php medical_clinic_get_page_classes($cmsmasters_option); ?>hfeed site">
<?php do_action('cmsmasters_before_page', $cmsmasters_option); ?>

<!-- Start Main -->
<div id="main">

	<?php if (is_page(15660) || is_page(15694) || is_page(15806) || is_page(15804))  { ?>

	<?php } else { ?>
		<header class="l-header-site">

				<div class="container pt-3">
					<div class="row align-items-center gx-xl-5">

		        <div class="col-xl-auto d-none">acessibilidade</div>

		        <div class="col-auto ms-auto">
		          <button class="btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"> <i class="fa-magnifying-glass fa-solid fs-5 link-light"></i> </button>
		          <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
		            <div class="container">
		              <div class="offcanvas-header">
		                <h3 class="offcanvas-title text-primary fw-bold h3" id="offcanvasTopLabel">Pesquisa </h3>
		                <button type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		              </div>
		              <div class="offcanvas-body">
		                    <?= get_search_form(); ?>
		              </div>
		            </div>
		          </div>
						</div>

		        <div class="col-auto">
							<?php get_template_part('template-parts/social'); ?>
						</div>

		        <div class="col-auto">
							<?php get_template_part('template-parts/idioma'); ?>
						</div>

		        <div class="col-12">
							<span class="border-top d-block mt-3"></span>
						</div>

					</div>
				</div>

				<div class="l-header-site__sticky py-3 pb-xl-0">
		      <div class="container">
		        <div class="row justify-content-between">

		          <div class="col col-sm-8 col-lg-6 col-xl">
		            <a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>">
		              <?php echo wp_get_attachment_image( 13893, 'full', "", ["class" => "img-fluid"]); ?>
		            </a>
		          </div>

		          <div class="col-auto d-xl-none">
		            <i class="fa-solid fa-bars fs-1 text-white js-nav-toggle"></i>
		          </div>

		          <div class="col-xl">
		            <div class="c-nav-menu js-nav-menu">
		              <div class="c-nav-menu__header d-flex justify-content-end p-2 d-xl-none">
		                <span class="fs-1 fa-solid fa-xmark me-3 mt-3 text-white js-nav-toggle"></span>
		              </div>
		              <div class="c-nav-menu__itens d-lg-flex justify-content-xl-end">
		                <?php get_template_part('template-parts/menu-principal'); ?>
		              </div>
		            </div>
		          </div>

		        </div>
				  </div>
		    </div>

		</header>



<!-- Start Header -->

<!-- Finish Header -->

<!-- Start Middle -->
<div class="middle-content">
	<?php } ?>
<?php
medical_clinic_page_heading();


list($cmsmasters_layout, $cmsmasters_page_scheme) = medical_clinic_theme_page_layout_scheme();


echo '<div class="'. ((is_front_page() || get_the_ID() === 14183 || get_the_ID() === 60 ) ? '' : 'container middle_inner') .' ' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" .
	'<div class=" ' . $cmsmasters_layout . '">' . "\n\n";
