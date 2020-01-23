

<nav class="main-nav-container" role="navigation">
	<div class="row">
	
		<div class="col-xs-12 col-sm-4">
			<a class="site-logo" href="/">
				<img src="<?php print get_template_directory_uri(); ?>/images/besteldercare_360x80.jpg">
			</a>
		</div>
		<div class="col-xs-12 col-sm-8">
			<ul>
				<li class="<?php if( is_front_page() || is_home() ): print 'active'; endif; ?>">
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/contact">Contact</a>
					</li>
				<li>
					<a href="/about">About</a>
				</li>
			</ul>
		</div>

	</div>
</nav>