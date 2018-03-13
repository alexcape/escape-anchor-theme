<?php theme_include('header'); ?>
	<section class="content wrap" id="article-<?php echo article_id(); ?>">
	
	<div class="progbar"><progress value="0"></progress></div>

	<div class="article-featured-image navnow fadeIn animated" id="up"
		<?php $image = article_custom_field('featuredimage');
		if ( !empty($image) ) :?>
		style="background:
			linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
			url('<?php echo $image;?>') center center no-repeat;background-size:cover;"
			<?php
				endif;
			?>
	>

	<nav class="blogbar">
		<div class="topblogbar">
			<a href="#up" class="whiteblogbar">
					<h3><?php echo article_title(); ?></h3>
			</a>
			<div class="sharing"><div class="sharethis-inline-share-buttons"></div></div>
		</div>
	</nav>
	
	<a href="/blog">
		<div class="article-logo">
			<div class="esclogo small-logo"></div>
			<span class="navname ddc">DOWN THE HATCH</span>
		</div>
	</a>
	
		<div class="title-overlay">
			<div class="title-contain">
				<h4 id="art-date" class="fadeInDown animated"><?php echo article_date(); ?></h4>
				<h1 id="art-title" class="fadeInUp animated"><?php echo article_title(); ?></h1>
			</div>
		</div>
	</div>
	
<div class="article-meat">
	<div class="article-text">
		<article>
			<?php echo article_html(); ?>
		</article>
	</div>


		<?php if (comments_open()): ?>
		<section class="comments">
			<?php if (has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while (comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

		<div class="authorsection">
			<div class="authorphoto"><img src="<?php echo theme_url('/img/author.png'); ?>"></div>
			<div class="authorinfo">
				<h3>Author:</h3>
				<p class="authorname"><?php echo article_author(); ?></p>
				<p class="authorbio"><?php echo article_author_bio(); ?></p>
			</div>
		</div>

		<div class="nextpost">
			<h3 class="teal">Up Next:</h3>
		<a
		<?php
		echo $posturl = dg_article_next_title();
		if ( is_null($posturl) ) {
			echo (article_previous_url() ? ' href="' . article_previous_url() . '"' : '');
		} else {
			echo (article_next_url() ? ' href="' . article_next_url() . '"' : '');
		}
		?>>
			<h2>
				<?php if ( is_null($posturl)) {echo dg_article_previous_title();} else {echo dg_article_next_title();} ?>
				<img class="arrow" src="<?php echo theme_url('/img/title-arrow.svg'); ?>" alt="arrow">
			</h2>
		</a>
		</div>
</div>
</div>

<?php theme_include('footer'); ?>
