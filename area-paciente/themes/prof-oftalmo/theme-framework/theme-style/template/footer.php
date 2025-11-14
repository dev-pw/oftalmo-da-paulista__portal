<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.5
 *
 * Footer Template
 * Created by CMSMasters
 *
 */


$cmsmasters_option = medical_clinic_get_global_options();
?>

<div class="bg-primary">
	<div class="footer_inner py-5">
		<div class="row">
			<div class="col-lg-7">
				<a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('name'); echo ' - '; bloginfo('description'); ?>">
					<div class="flex-nowrap pb-4 row">
						<div class="col-auto col-lg d-flex align-items-center justify-content-end">
							<img src="https://siteoftalmodapau1.websiteseguro.com/wp-content/uploads/2023/10/logo-epm-unifesp-hsp_01.png" alt="" class="img-fluid" width="80%">
						</div>
						<div class="align-items-center border-end border-start col-auto col-lg d-flex">
							<img src="https://siteoftalmodapau1.websiteseguro.com/wp-content/uploads/2023/10/logo-epm-unifesp-hsp_02.png" alt="" class="img-fluid" width="100%">
						</div>
						<div class="col-auto col-lg d-flex align-items-center">
							<img src="https://siteoftalmodapau1.websiteseguro.com/wp-content/uploads/2023/10/logo-epm-unifesp-hsp_03.png" alt="" class="img-fluid" width="60%">
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-5 text-white">
				<a href="https://maps.app.goo.gl/DqSRK2onieFskSoS6" target="_blank" class="text-white fw-light"> <span class="fw-bold mb-2">Ambulatório</span> <br> Rua Botucatu, 821 - Vila Clementino, 04023-062 <br> São Paulo - SP</a>
				<div class="mt-3">
					<a href="#" class="btn btn-secondary link-light me-3">Maps</a>
					<a href="#" class="btn btn-outline-secondary link-light">Waze</a>
				</div>
				<div class="mt-3">
					<?php get_template_part('template-parts/social'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer <?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['medical-clinic' . '_footer_scheme'] . ($cmsmasters_option['medical-clinic' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>"  style="background: #074139;">
	<div class="footer_inner">
		<?php
		// if (
		// 	$cmsmasters_option['medical-clinic' . '_footer_type'] == 'default' &&
		// 	$cmsmasters_option['medical-clinic' . '_footer_logo']
		// ) {
		// 	medical_clinic_footer_logo($cmsmasters_option);
		// }


		if (
			(
				$cmsmasters_option['medical-clinic' . '_footer_type'] == 'default' &&
				$cmsmasters_option['medical-clinic' . '_footer_html'] !== ''
			) || (
				$cmsmasters_option['medical-clinic' . '_footer_type'] == 'small' &&
				$cmsmasters_option['medical-clinic' . '_footer_additional_content'] == 'text' &&
				$cmsmasters_option['medical-clinic' . '_footer_html'] !== ''
			)
		) {
			echo '<div class="footer_custom_html_wrap">' .
				'<div class="footer_custom_html">' .
					do_shortcode(wp_kses(stripslashes($cmsmasters_option['medical-clinic' . '_footer_html']), 'post')) .
				'</div>' .
			'</div>';
		}


		if (
			has_nav_menu('footer') &&
			(
				(
					$cmsmasters_option['medical-clinic' . '_footer_type'] == 'default' &&
					$cmsmasters_option['medical-clinic' . '_footer_nav']
				) || (
					$cmsmasters_option['medical-clinic' . '_footer_type'] == 'small' &&
					$cmsmasters_option['medical-clinic' . '_footer_additional_content'] == 'nav'
				)
			)
		) {
			echo '<div class="footer_nav_wrap">' .
				'<nav>';


				wp_nav_menu(array(
					'theme_location' => 'footer',
					'menu_id' => 'footer_nav',
					'menu_class' => 'footer_nav'
				));


				echo '</nav>' .
			'</div>';
		}


		if (
			isset($cmsmasters_option['medical-clinic' . '_social_icons']) &&
			(
				(
					$cmsmasters_option['medical-clinic' . '_footer_type'] == 'default' &&
					$cmsmasters_option['medical-clinic' . '_footer_social']
				) || (
					$cmsmasters_option['medical-clinic' . '_footer_type'] == 'small' &&
					$cmsmasters_option['medical-clinic' . '_footer_additional_content'] == 'social'
				)
			)
		) {
			medical_clinic_social_icons();
		}
		?>
		<span class="footer_copyright copyright text-center text-white">
			<?php
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('', ' / ');
			}

			echo esc_html(stripslashes($cmsmasters_option['medical-clinic' . '_footer_copyright']));
			?>
		</span>
	</div>
</div>
