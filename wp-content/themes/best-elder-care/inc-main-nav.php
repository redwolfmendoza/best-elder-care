

<nav class="main-nav-container" role="navigation">
	<div class="main-nav">
		<a class="nav-logo" href="/">
			<img src="<?php print get_template_directory_uri(); ?>/images/besteldercare_360x80.jpg">
		</a>

		<ul class="nav-links">
			<li class="<?php if( is_front_page() || is_home() ): print 'active'; endif; ?>">
				<a href="/">Home</a>
			</li>
			<li>
				<a href="/about">About</a>
			</li>
			<li>
				<a href="/contact">Contact</a>
			</li>
		</ul>
	</div>

</nav>