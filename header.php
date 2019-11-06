<?php
/**
 * Site Header
 *
 * @package      Voyager_Starter
 * @author       Ben Whitlock
 * @since        0.2.0
 * @license      GPL-2.0+
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Raleway:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'voyager-starter' ); ?></a>
		<header class="site-header">
			<nav class="navbar navbar-expand-xl navbar-dark fixed-top">
						<!-- Logo -->
						<a class="navbar-brand" href="/">
							<img src="/wp-content/themes/voyager-theme/assets/images/logo.png" alt="Shane's Pristine Power Wash logo">
						</a>

						<!-- Mobile Hamburger Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<!-- Navigation -->
						<div id="navbarSupportedContent" class="collapse navbar-collapse mt-4 mt-xl-0">
							<?php
							wp_nav_menu([
								'menu'            => 'top',
								'theme_location'  => 'top',
								'container'       => '',
								'container_id'    => '',
								'container_class' => '',
								'menu_id'         => false,
								'menu_class'      => 'navbar-nav',
								'depth'           => 2,
								'fallback_cb'     => 'bs4navwalker::fallback',
								'walker'          => new bs4navwalker()
							]);
							?>

							<div class="ml-auto my-5 my-xl-0">
								<span class="d-flex flex-column flex-xl-row">
									<a href="tel:(540) 786-2626" class="h4 text-white pt-2 mr-xl-4">
										</i> (540) 786-2626
									</a>
		              <a href="/quote-request" class="btn btn-secondary">
		                </i> REQUEST A FREE QUOTE
		              </a>
								</span>
							</div>
						</div>

			</nav>
		</header>
		<div id="content" class="site-content">
