<?php
/**
 * Site Footer
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

		<footer class="py-8 py-md-11 border-top border-gray-800-50 bg-primary text-white">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-3">

						<!-- Brand -->
						<img src="/wp-content/uploads/2019/09/ShanesPristine_Logo-update_200x80.png" alt="..." class="footer-brand img-fluid mb-2">

						<!-- Text -->
						<p class="text-gray-700 mb-2">
							We Don’t Just Clean. We Make It Pristine!
						</p>

						<!-- Social -->
						<ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
							<li class="list-inline-item list-social-item mr-3">
								<a href="https://www.facebook.com/shanespristinepowerwash/" class="fab fa-2x fa-facebook text-white" target="_blank"></a>
							</li>
							<li class="list-inline-item list-social-item mr-3">
								<a href="https://www.instagram.com/shanespristinepowerwash/" class="fab fa-2x fa-instagram text-white" target="_blank"></a>
							</li>
							<li class="list-inline-item list-social-item">
								<a href="https://www.youtube.com/channel/UCSdC2VVXSCTLEp56R-6FhoA" class="fab fa-2x fa-youtube text-white" target="_blank"></a>
							</li>
						</ul>

					</div>
					<div class="col-6 col-md-4 col-lg-3">

						<h6 class="font-weight-bold text-uppercase text-gray-700">
							Services
						</h6>

						<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1828 ) ); ?>" class="text-white">
									Commercial Kitchens
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1829 ) ); ?>" class="text-white">
									Parking Lots
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1833 ) ); ?>" class="text-white">
									Decks & Patios
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1827 ) ); ?>" class="text-white">
									Efflorescence
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( get_page_link( 1831 ) ); ?>" class="text-white">
									Gutter Cleaning
								</a>
							</li>
						</ul>

					</div>
					<div class="col-6 col-md-4 col-lg-3">

						<h6 class="font-weight-bold text-uppercase text-gray-700">
							More
						</h6>

						<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 2549 ) ); ?>" class="text-white">
									Commercial Pressure Washing
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1824 ) ); ?>" class="text-white">
									Residential Pressure Washing
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1826 ) ); ?>" class="text-white">
									Roof Washing
								</a>
							</li>
							<li class="mb-3">
								<a href="#!" class="text-white">
									Seasonal Services
								</a>
							</li>
							<li>
								<a href="#!" class="text-white">
									Snow Removal
								</a>
							</li>
						</ul>

					</div>
					<div class="col-6 col-md-4 col-lg-3">

						<h6 class="font-weight-bold text-uppercase text-gray-700">
							Legal
						</h6>

						<ul class="list-unstyled mb-0">
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1890 ) ); ?>" class="text-white">
									Terms of Service
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 2503 ) ); ?>" class="text-white">
									Quote Request
								</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo esc_url( get_page_link( 1892 ) ); ?>" class="text-white">
									Contact Us
								</a>
							</li>
							<li class="mb-3">
								<a href="tel:540-786-2626" class="text-white">(540) 786-2626</a>
							</li>
							<li class="mb-3">
								<a href="/sitemap_index.xml/" class="text-white">Sitemap</a>
							</li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row pt-3">
					<div class="col-12 col-md-4">
						<p class="lead">Alexandria</p>
						<address>200 N. Washington St #320632, <br>Alexandria, VA 22320</address>
					</div>
					<div class="col-12 col-md-4">
						<p class="lead">Fairfax</p>
						<address>10660 Page Avenue, Suite 91,<br> Fairfax, VA 22038</address>
					</div>
					<div class="col-12 col-md-4">
						<p class="lead">Manassas</p>
						<address>
							8801 Sudley Rd, Suite 2562, <br>Manassas, VA 20110
						</address>
					</div>
				</div>
			</div> <!-- / .container -->
		</footer>
	</div><!-- #content -->

	<?php wp_footer(); ?>

	</div><!-- #site -->
</body>
</html>
