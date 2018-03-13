<?php theme_include('header'); ?>

<section class="content contentwrap">

<div class="realheader">
	<div class="esclogo blog-logo fadeInDown animated"></div>
	<div class="downthehatch fadeInUp animated"><img src="<?php echo theme_url('/img/down-the-hatch.svg'); ?>" alt="Down The Hatch Blog"></div>
</div>

	<?php if (has_posts()): ?>

	    <?php $i = 0; while(posts()): $i++; ?>
			<article class="feed-article">
			<a href="<?php echo article_url(); ?>">
				<div class="article-image">
					<img src="<?php $articleimage = article_custom_field('featuredimage');
						if ( !empty($articleimage) ) :?>
						<?php echo $articleimage;?>">
					<?php endif; ?>
				</div>
				<h4><time datetime="<?php echo relative_time(article_time()); ?>"><?php echo article_date(); ?></time></h4>
				<h2>
					<?php echo article_title(); ?>
					<img class="arrow" src="<?php echo theme_url('/img/title-arrow.svg'); ?>" alt="arrow">
				</h2>
				<p class="description"><?php echo article_description(); ?></p>
			</a>
			</article>
		<?php endwhile; ?>

		<?php if (has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<div class="wrap">
			<h1>No posts yet!</h1>
			<p>Looks like you have some writing to do!</p>
		</div>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
