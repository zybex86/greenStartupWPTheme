<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Green_Startup
 */

?>

<section class="no-results not-found">
	<div class="section-header">
		<i class="fas fa-search"></i>
		<h2 class="page-title"><?php esc_html_e( 'Niestety nic nie znaleziono', 'greenstartup' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Gotów do dodania swojego pierwszego posta? <a href="%1$s">Zacznij tutaj</a>.', 'greenstartup' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Niestety nie znaleziono szukanej frazy. Spróbuj ponownie.', 'greenstartup' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'Wydaję się, że nie możemy zlokalizować tego czego szukasz. Może zmień zapytanie?', 'greenstartup' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
