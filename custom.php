<?php
/**
 * Template Name: Custom
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mplsagc
 */
	get_header();
?>


<div class="container">
	<div class="col col-ls-12">
	<header class="page-header">
		<h1 class="page-title">Projetos</h1>
	</header>
	<!-- .page-header -->
	</div>
		<?php 
		$args = array(
			'post_type' => 'page',
			'post_parent' => 15,
			'posts_per_page' => 10,
		);
		$query = new WP_Query( $args );

		if(count($query->posts)):
			foreach($query->posts as $key => $post):
				$post->key = $key+1;
				echo "<div class=\"service-post col col-xs-12 col-sm-6 col-md-6 col-lg-6\">";
					get_template_part('template-parts/post-projects-grid', get_post_format());
				echo "</div>";
			endforeach;
		else :
			echo "Nenhum post";
		endif; 
	?>		
</div>

<?php get_footer(); ?>