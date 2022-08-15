<?php get_header();
/*
 Template Name: Terapias Injetaveis
*/
?>
<div id="content">
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="entry-content " itemprop="articleBody">
							<section class="bg-geral fundo-terapia-injetavel d-flex justify-content-center align-items-center position-relative" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>');" id="banners">
								<div class="filter-1"></div>
								<div class="row mw-100 pt-5">
									<div class="col-12 col-xl-6"></div>
									<div class="col-12 col-xl-6 pt-5">
										<div class="row pt-5">
											<div class="col-12 col-xl-6 text-left bg-white-opaco-1024 pt-5">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								</div>
							</section>
						</section>
					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>