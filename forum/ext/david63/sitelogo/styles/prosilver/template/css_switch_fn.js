;(function($, document) {
	$(document).ready(function () {
		var colour_1 = '';
		var colour_2 = '';
		var colour_3 = '';

		// Replicate the style colours in the new site logo css
    	colour_1 = $('.headerbar').css('background-color');
		colour_2 = $('h1').css('color');
		colour_3 = $('p').css('color');

		$('.sl-headerbar').css('background-color', colour_1);
		$('#sl-new-desc h1').css('color', colour_2);
		$('#sl-new-desc p').css('color', colour_3);

		// Remove the site name and description
		if (siteNameSupress == true) {
			$('#site-description h1').css('display', 'none');
			$('#site-description p').css('display', 'none');
    	}

		// Place the site logo (and text) in the centre
		if (siteLogoCentre == true) {
			$('#site-description').css({'padding-top': '10px', 'text-align': 'center', 'width': '100%'});
			$('#site-description .logo').css('float', 'none');
			$('.search-header').css('margin-top', '-40px');
			$('#sl-new-desc h1').css({'text-align': 'center', 'width': '100%'});
			$('#sl-new-desc p').css({'text-align': 'center', 'width': '100%'});
    	}

		// Place the site logo on the right
		if (siteLogoRight == true) {
			$('#site-description').css({'text-align': 'left', 'width': '100%', 'margin-left': '10px'});
			$('#site-description .logo').css({'float': 'right', 'margin-right': '10px'});
			$('#sl-new-desc h1').css({'clear': 'both', 'float': 'right', 'margin-right': '10px'});
			$('#sl-new-desc p').css({'clear': 'both', 'float': 'right', 'margin-right': '10px'});

			if (searchBelow != true) {
				$('.search-header').css({'float': 'left', 'margin-top': '-10px', 'margin-left': '10px'});
			}
    	}

		// Move the search box to the top nav bar
		if (searchBelow == true) {
			$('.search-header').css({'float': 'right', 'margin-top': '5px', 'box-shadow': 'none'});
    	}

		// Use the override text colour to replace the default in the header
		if (useOverrideColour == true) {
			$('#site-description h1').css('color', '#' + overrideColour);
			$('#site-description p').css('color', '#' + overrideColour);
			$('#sl-new-desc h1').css('color', '#' + overrideColour);
			$('#sl-new-desc p').css('color', '#' + overrideColour);
    	}

		// Use the Site Logo banner
		if (useBanner == true) {
			$('.headerbar').css({'background-image': 'url("' + siteLogoBanner + '")', 'height': bannerHeight + 'px', 'border-radius': borderRadius + 'px', 'display': 'block', 'margin': '0 auto', 'max-width': '100%'});
    	}
	})

})(jQuery, document);
