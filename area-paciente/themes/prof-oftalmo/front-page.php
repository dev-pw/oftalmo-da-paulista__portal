<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.7
 *
 * Default Page Template
 * Created by CMSMasters
 *
 */


get_header('');

get_template_part('template-parts/banner-header');
get_template_part('template-parts/section-video');
get_template_part('template-parts/section-sobre');
get_template_part('template-parts/servicos');
get_template_part('template-parts/paciente');
get_template_part('template-parts/blog');
echo '<div class="container py-5">'. do_shortcode('[trustindex no-registration=google]') .'</div>';
// get_template_part('template-parts/feed');
get_template_part('template-parts/logos');

get_footer();
