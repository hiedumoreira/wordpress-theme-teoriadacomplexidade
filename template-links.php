<?php
/*
Template Name: Links Recomendados
*/
?>
<?php get_header(); ?>
<main>
	<!--Carousel-->
    <section id="banner">
        <div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
	<!--/Carousel-->
	<!--Categories-->
	<section id="more-interest">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if( have_rows('links') ): ?>                    
						<?php while( have_rows('links') ): the_row(); ?>
							<div class="col-md-4">
								<section>
									<div class="card">
										<a href="<?php the_sub_field('link_url'); ?>" target="_blank">
											<div class="background" style="background-image:url(<?php the_sub_field('miniatura'); ?>);">
												<h1><?php the_sub_field('name'); ?></h1>
											</div>
										</a>
										<p class="description hidden-xs"><?php the_sub_field('descript'); ?></p>
									</div>
								</section>
							</div>
						<?php endwhile; ?>                        
					<?php endif; ?>
				</div>
				<div class="col-md-12">
					<?php echo do_shortcode('[facetwp pager="true"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Categories-->
</main>
<?php get_footer();	?>