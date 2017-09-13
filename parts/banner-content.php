<?php
	$slogan = get_field( "slogan" );
	if( $slogan == true):
		$slogan = "slogan";
	endif;

	$linkToCompany = get_field( "link_to_company" );
	$companyLogo = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	if (!empty($companyLogo)):
		$companyLogoSnippet = 'style="background-image: url(' . $companyLogo . ');"';
	endif;
	if( $linkToCompany):
		echo '<a class="' . $slogan . 'Enabled company-logo" href="' . $linkToCompany . '" rel="bookmark" title="' . $linkToCompany . '" ' . $companyLogoSnippet . ' target="_blank">&nbsp;</a>';
	else:
		echo '<a class="' . $slogan . 'Enabled small-12 company-logo" rel="bookmark" title="' . get_the_title() . '" ' . $companyLogoSnippet . ' target="_blank">&nbsp;</a>';
	endif;
		the_content();