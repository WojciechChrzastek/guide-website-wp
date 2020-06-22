<?php
/**
 * The template for displaying the 404 template in the guide theme.
 *
 */

get_header();
?>

<section>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Sorry... That page seems to be missing!'); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found.', ); ?></p>
			<p>Maybe you were looking for something else? Take a look at the links below:</p>

			<ul>
				<li><a href="/">Home page</a></li>
				<li><a href="/blog/">Latest blog posts</a></li>
			</ul>

			<br>

			<p>Or try a search:</p>

			<?php
			get_search_form(
				array(
					'label' => __( '404 not found', 'guide' ),
				)
			);
			?>

		</div>

	</div>

</section>

<?php
get_footer();
