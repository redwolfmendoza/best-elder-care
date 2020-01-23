<?php
	$navlinks = array();
	
	$navLinks['home']['pageName'] = 'Home';
	$navLinks['home']['url'] = 'home';
	$navLinks['home']['pageId'] = '7'; //update this after db migration
	$navLinks['home']['faIcon'] = '';
	$navLinks['home']['activePage'] = false;

	$navLinks['about']['pageName'] = 'About';
	$navLinks['about']['url'] = 'about';
	$navLinks['about']['pageId'] = '12'; //update this after db migration
	$navLinks['home']['faIcon'] = '';
	$navLinks['about']['activePage'] = false;

	$navLinks['contact']['pageName'] = 'Contact';
	$navLinks['contact']['url'] = 'contact';
	$navLinks['contact']['pageId'] = '14'; //update this after db migration
	$navLinks['home']['faIcon'] = '';
	$navLinks['contact']['activePage'] = false;


	$currentPageId = get_the_ID();
	if( is_front_page() || is_home() ):
		$navLinks['home']['activePage'] = true;
	endif;
?>

<nav id="main-nav" class="main-nav-container" role="navigation">
	<div class="main-nav-wrapper">

		<a class="nav-logo" href="/">
			<img src="<?php print get_template_directory_uri(); ?>/images/besteldercare_360x80.jpg">
		</a>

		<button class="mobile-menu-button"><i class="fas fa-bars"></i></button>

		<ul class="nav-links">
			<?php 
				foreach( $navLinks  as $navLinkObj){

					if( $currentPageId == $navLinkObj['pageId']):
						print '<li class="active"><a href="/'. $navLinkObj['url'] .'">'. $navLinkObj['pageName'] .'</a></li>';
					else:
						print '<li><a href="/'. $navLinkObj['url'] .'">'. $navLinkObj['pageName'] .'</a></li>';
					endif;
					
				}
			?>
		</ul>
	</div>

</nav>