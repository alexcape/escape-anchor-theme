<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="/testing/css/normalize.css">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,800">
		<link rel="stylesheet" href="<?php echo theme_url('/css/animate.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/eh-icon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5a9d8d757a115300132447a6&product=inline-share-buttons' async='async'></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_url('/js/forblog.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo theme_url('/js/smooth-scroll.min.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo page_title(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo page_description(); ?>">

		<?php if (customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
		<div class="main-wrap">
