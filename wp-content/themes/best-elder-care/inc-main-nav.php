<?php
	$navlinks = array();
	
	$navLinks['home']['pageName'] = 'Home';
	$navLinks['home']['url'] = 'home';
	$navLinks['home']['pageId'] = '7'; //update this after db migration
	$navLinks['home']['faIcon'] = 'fas fa-home';
	$navLinks['home']['activePage'] = false;

	$navLinks['about']['pageName'] = 'About';
	$navLinks['about']['url'] = 'about';
	$navLinks['about']['pageId'] = '12'; //update this after db migration
	$navLinks['about']['faIcon'] = 'fas fa-paperclip';
	$navLinks['about']['activePage'] = false;

	$navLinks['contact']['pageName'] = 'Contact';
	$navLinks['contact']['url'] = 'contact';
	$navLinks['contact']['pageId'] = '14'; //update this after db migration
	$navLinks['contact']['faIcon'] = 'fas fa-address-book';
	$navLinks['contact']['activePage'] = false;


	$currentPageId = get_the_ID();
	//TODO:: pageid is null, fix...
	//print "<!--PAGE-ID:".$currentPageId."-->";
	if( is_front_page() || is_home() ):
		$navLinks['home']['activePage'] = true;
	endif;
?>


<nav id="main-nav" class="main-nav-container" role="navigation">
	<div class="cta-banner">

		<a href="tel:+18185551234">
			Call: (818) 555-1234
		</a>

	</div>
	<div class="main-nav-wrapper">

		<a class="nav-logo" href="/">
			<img src="<?php print get_template_directory_uri(); ?>/images/besteldercare_360x80.jpg">
		</a>

		<button class="mobile-menu-button"><i class="fas fa-bars"></i></button>

		<ul class="nav-links">
			<?php 
				foreach( $navLinks  as $navLinkObj){

					//TODO:: make menu link active, depending on current page...
					if( $currentPageId == $navLinkObj['pageId']):
						print '<li class="active">';
					else:
						print '<li>';
					endif;

					print '<a href="/'. $navLinkObj['url'] .'"><i class="'. $navLinkObj['faIcon'] .'"></i> '. $navLinkObj['pageName'] .'</a>';
					print '</li>';
					
				}
			?>
		</ul>
	</div>

</nav>