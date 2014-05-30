<?php
/*
Template Name: Home Template 
*/
?>
<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf">

			<div id="main" class="ginger-main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header> <?php // end article header ?>

					<section class="entry-content cf" itemprop="articleBody">
					<?php
						// the content (pretty self explanatory huh)
						the_content();

						/*
						 * Link Pages is used in case you have posts that are set to break into
						 * multiple pages. You can remove this if you don't plan on doing that.
						 *
						 * Also, breaking content up into multiple pages is a horrible experience,
						 * so don't do it. While there are SOME edge cases where this is useful, it's
						 * mostly used for people to get more ad views. It's up to you but if you want
						 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
						 *
						 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
						 *
						*/
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
					</section> <?php // end article section ?>

					<footer class="article-footer cf">

					</footer>

				<?php //comments_template(); ?>

				</article>

				<?php endwhile; else : ?>

						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

				<?php endif; /**** End Home Page Main content?>****/
					$args = array(
						"category_name" => "news",
						"posts_per_page" => 3,
						"order" => "DESC",
						"orderby" => "date"	
					);

					$query_news = new WP_Query($args);
					if($query_news->have_posts()): while($query_news->have_posts()): $query_news->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" class="ginger-news" role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header class="article-header">

						<?php printf('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', get_the_time( 'Y-m-j' ), get_the_time( 'F jS, Y', 'bonestheme' )); ?>
						<a href="<?php ?>"><p class="news-title" itemprop="headline"><?php the_title(); ?></p></a>
					</header> <?php // end article header ?>
				</article>
				<?php endwhile; else : ?>

						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

				<?php endif; ?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>
