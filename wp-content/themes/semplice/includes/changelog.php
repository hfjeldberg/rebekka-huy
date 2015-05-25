<?php 
/*
 * welcome
 * semplice.theme
*/

?>

<div id="welcome">
	<section id="smp-getting-started" class="welcome-section">
		<div class="changelog">
			<h4>Version 2.0.1 - May 8, 2015</h4>
			<p>
				<span class="prefix">ADDED:</span> Option to make the navigation bar transparent while dropdown menu is open<br />
				<span class="prefix">ADDED:</span> Option to disable the parallax effect on the fullscreen cover<br />
				<span class="prefix">FIXED:</span> Standard menu active background color now applies to all current page classes<br />
				<span class="prefix">FIXED:</span> Custom project panel configuration now working properly<br />
				<span class="prefix">FIXED:</span> Deleted unused strings from the en_EN.po translation file<br />
				<span class="prefix">FIXED:</span> Fullscreen videos now sized correctly in Safari<br />
				<span class="prefix">FIXED:</span> To avoid errors the cyrillic characters setting will be disabled if the php version is < 5.4.0<br />
				<span class="prefix">FIXED:</span> Some misspelling in the theme options<br />
				<span class="prefix">CHANGED:</span> Now the project title is used as the alternavtive text for the portfolio grid and project panel thumbnail images<br />
			</p>
			<h4>Version 2.0 - May 1, 2015</h4>
			<p>
				<span class="prefix">ADDED:</span> Custom modules for the content editor<br />
				<span class="prefix">ADDED:</span> Button module to create buttons<br />
				<span class="prefix">ADDED:</span> Code module to embed code or shortcodes<br />
				<span class="prefix">ADDED:</span> One-click Update feature for Semplice.<br />
				<span class="prefix">ADDED:</span> Dribbble module to showcase your latest shots<br />
				<span class="prefix">ADDED:</span> Option to make cover slider horizontal<br />
				<span class="prefix">ADDED:</span> Add page content below cover slider (if slider is horizontal)<br />
				<span class="prefix">ADDED:</span> Option to auto-scroll to content area when coming from cover slider<br />
				<span class="prefix">ADDED:</span> Create a responsive fullscreen dropdown menu<br />
				<span class="prefix">ADDED:</span> Change the menu items horizontal alignment in the dropdown menu<br />
				<span class="prefix">ADDED:</span> Change the menu items vertical alignment in the dropdown menu<br />
				<span class="prefix">ADDED:</span> Change the menu items vertical padding in the dropdown menu<br />
				<span class="prefix">ADDED:</span> Define font weight for standard an dropdown menu<br />
				<span class="prefix">ADDED:</span> Access Content Editor directly in WordPress page/project overview<br />
				<span class="prefix">ADDED:</span> Option to choose arrows for the cover slider navigation instead of dots<br />
				<span class="prefix">ADDED:</span> Option to also add pages to the cover slider<br />
				<span class="prefix">ADDED:</span> Option to re-order the covers for cover slider after selection<br />
				<span class="prefix">ADDED:</span> Options to the video module: 'Loop', 'Autoplay', 'Muted', 'Hide Controls'<br />
				<span class="prefix">ADDED:</span> Add multiple portfolio grids on the same page / project<br />
				<span class="prefix">ADDED:</span> Option to make the cover headline image / text fluid<br />
				<span class="prefix">ADDED:</span> Define mobile breakpoints for image title on full screen cover<br />
				<span class="prefix">ADDED:</span> Alert when closing the browser tab if content editor not saved yet<br />
				<span class="prefix">ADDED:</span> Option to define custom navigation vertical padding<br />
				<span class="prefix">ADDED:</span> Option to define text decoration for navigation (hover, active etc.)<br />
				<span class="prefix">ADDED:</span> Option to change the title alignment for the thumbnail hover<br />
				<span class="prefix">ADDED:</span> Option 'Grid Width' and 'Image Scale' in the image module<br />
				<span class="prefix">ADDED:</span> Option 'Background Attachment' to the content editor 'Branding'<br />
				<span class="prefix">ADDED:</span> Option to hide the share box globally<br />
				<span class="prefix">ADDED:</span> Option to use cyrillic characters (PHP Version 5.4+ is required)<br />
				<span class="prefix">ADDED:</span> Options to define a customizable underline for the drop down menu items.<br />
				<span class="prefix">ADDED:</span> Options to customize the social icons bar in the dropdown menu<br />
				<span class="prefix">ADDED:</span> Hamburger icon animation, so cool!<br />
				<span class="prefix">ADDED:</span> Media type drop down for oEmbeds in the content editor<br />
				<span class="prefix">ADDED:</span> Tags in blog posts & blog overview<br />
				<span class="prefix">ADDED:</span> Option to unmute fullscreen cover video<br />
				<span class="prefix">ADDED:</span> Option to create multiple project panels based on categories<br />
				<span class="prefix">ADDED:</span> Option to display a pagination (dots) for the gallery module<br />
				<span class="prefix">ADDED:</span> Option to display the pagination either above or below the images<br />
				<span class="prefix">ADDED:</span> Option to color the navigation arrows and pagination dots<br />
				<span class="prefix">ADDED:</span> Option to hide both the navigation arrows and pagination dots<br />
				<span class="prefix">ADDED:</span> Columns are now numbered in edit mode<br />
				<span class="prefix">ADDED:</span> Instead of a blank page the content editor will now display a default page<br />
				<span class="prefix">ADDED:</span> New theme options page called 'Welcome'<br />
				<span class="prefix">ADDED:</span> 'Getting started' tab to the 'Welcome' page<br />
				<span class="prefix">ADDED:</span> 'Changelog' tab to the 'Welcome' page<br />
				<span class="prefix">ADDED:</span> Option to import a demo portfolio<br />
				<span class="prefix">ADDED:</span> Demo project for the content editor<br />
				<span class="prefix">CHANGED:</span> Improved the usability for the Navbar & Menu<br />
				<span class="prefix">CHANGED:</span> Improved menu transition, much smooth, very yay<br />
				<span class="prefix">CHANGED:</span> Placeholder images in the content editor (oembed, video etc.)<br />
				<span class="prefix">CHANGED:</span> Moved the settings for the page background from 'Semplice' -> 'Basic Styling' to 'Semplice' -> 'Advanced Styling' where they belong<br />
				<span class="prefix">CHANGED:</span> Libre Baskerville to PT Serif for the default serif typeface
				<span class="prefix">REMOVED:</span> Full width bottom border for dropdown menu items are removed<br />
				<span class="prefix">FIXED:</span> "Laggy" user inputs especially on the menu buttons and project panel (mobile)<br />
				<span class="prefix">FIXED:</span> Fullscreen video cover was off-center on page load<br />
				<span class="prefix">FIXED:</span> New method to include the style.css for the child theme<br />
				<span class="prefix">FIXED:</span> Error with multiple galleries in a multi column<br />
				<span class="prefix">FIXED:</span> Parse error if using an existing page as a template with portfolio grid<br />
				<span class="prefix">FIXED:</span> Double content on templates due to the shortcodes executed template<br />
				<span class="prefix">FIXED:</span> Scroll down arrow not clickable on linked fullscreen covers<br />
				<span class="prefix">FIXED:</span> Fullscreen cover with a link to a project loaded no background image<br />
				<span class="prefix">FIXED:</span> Headline title / image are not linked to the project on fullscreen cover<br />
				<span class="prefix">FIXED:</span> Cover Slider now supports multiple Videos<br />
				<span class="prefix">FIXED:</span> Content Editor icons on retina devices now visible again<br />
				<span class="prefix">FIXED:</span> SVG headline images now displayed correctly<br />
				<span class="prefix">FIXED:</span> Full width thumbnails title image now gets correctly vertically centered<br />
				<span class="prefix">FIXED:</span> Click on menu item with a certain class does not trigger "Slide Up"<br />
				<span class="prefix">FIXED:</span> Child theme style.css now gets included after the themes custom css<br />
				<span class="prefix">FIXED:</span> Paragraph module edit dialog now receives the correct height in multi columns<br />
				<span class="prefix">FIXED:</span> Added initial scale for mobile devices to avoid page loads half way<br />
				<span class="prefix">FIXED:</span> Eliminated parse error on layer names field when using special characters<br />
				<span class="prefix">FIXED:</span> Images in the blog format 'quote' are not scaled to the content width<br />
				<span class="prefix">FIXED:</span> Content in the blog format 'quote' was dimmed down to 60% opacity<br />
				<span class="prefix">FIXED:</span> Only first image of a blog gallery is displayed in the lightbox<br />
			</p>
			<h4 class="mt30">Version 1.2.2 - February 25, 2015</h4>
			<p>
				<span class="prefix">FIXED:</span> Child theme style.css now gets included after the themes custom css<br />
				<span class="prefix">FIXED:</span> Click on a menu item with a certain class doesnt trigger the "Slide Up" animation<br />
				<span class="prefix">FIXED:</span> Full width thumbnails title image now gets correctly vertically centered<br />
				<span class="prefix">FIXED:</span> Added an initial scale for mobile devices to avoid that the page starts with an vertical offset<br />
				<span class="prefix">FIXED:</span> Paragraph module edit dialog now receives the correct height in multi columns<br />
				<span class="prefix">FIXED:</span> Media type dropdown for oEmbeds in the content editor to avoid non-video content gets the responsive video class assigned<br />
			</p>
			<h4 class="mt30">Version 1.2.1 - January 26, 2015</h4>
			<p>
				<span class="prefix">ADDED:</span> Now it's possible to add multiple portfolio grids on the same page / project<br />
				<span class="prefix">ADDED:</span> If you want to close your tab after visiting or editing something in the content editor you will now get an alert asking if you really want to leave the page without saving your progress<br />
				<span class="prefix">ADDED:</span> Layernames, options and styles in the content editor are now getting validated to eleminate json parse errors<br />
				<span class="prefix">FIXED:</span> Fullscreen video cover was off-center on page load<br />
				<span class="prefix">FIXED:</span> New method to include the style.css for the child theme<br />
				<span class="prefix">FIXED:</span> Error with multiple galleries in a multi column<br />
				<span class="prefix">FIXED:</span> Parse error if using an existing page as a template which contains a portfolio grid<br />
				<span class="prefix">FIXED:</span> Double content on templates because the shortcodes getting executed on the template<br />
				<span class="prefix">FIXED:</span> Scrolldown arrow not clickable on linked fullscreen covers<br />
				<span class="prefix">FIXED:</span> Fullscreen cover with a link to a project loaded no background image and the headline title / image are not linked to the project<br />
				<span class="prefix">FIXED:</span> Cover Slider now supports multiple Videos<br />
				<span class="prefix">FIXED:</span> Content Editor icons on retina devices now visible again<br />
				<span class="prefix">FIXED:</span> SVG headline images now displayed correctly<br />
			</p>
			<h4 class="mt30">Version 1.2.0 - November 26, 2014</h4>
			<p>
				<span class="prefix">ADDED:</span> Option for a subtle image zoom in fullscreen covers<br />
				<span class="prefix">ADDED:</span> Option to add a vertical fullscreen slider from existing fullscreen covers<br />
				<span class="prefix">REPLACED:</span> Old light box with a new fullscreen light box (for Blog and Editor)<br />
				<span class="prefix">ADDED:</span> Option to change the title and category font size for full width thumbnails<br />
				<span class="prefix">ADDED:</span> Option for a subtle image zoom in fullscreen covers<br />
				<span class="prefix">ADDED:</span> Divided Navbar & Menu Control Panel in 3 parts (Logo / Navbar / Menu)<br />
				<span class="prefix">ADDED:</span> Option to change the horizontal padding for logo and nav in fluid nav bars<br />
				<span class="prefix">ADDED:</span> Option to center the standard menu items in fluid nav bars<br />
				<span class="prefix">ADDED:</span> Option to change the letter spacing for all menu items<br />
				<span class="prefix">ADDED:</span> Text transform option for all menu items (Normal, UPPERCASE, lowercase)<br />
				<span class="prefix">ADDED:</span> Option to change the horizontal padding between standard menu items<br />
				<span class="prefix">ADDED:</span> Option to add a background color for the mouseover on standard menu items<br />
				<span class="prefix">ADDED:</span> Option to add a background color for the active standard menu item<br />
				<span class="prefix">ADDED:</span> Set an specific menu point active while in a project<br />
				<span class="prefix">ADDED:</span> Thumb hover size to always cover dimensions of thumbnail images<br />
				<span class="prefix">ADDED:</span> Option to change the project panel title (More selected projects)<br />
				<span class="prefix">ADDED:</span> Option to change the project panel title font size (More selected projects)<br />
				<span class="prefix">ADDED:</span> Option to select if the content starts after the nav bar or straight on top<br />
				<span class="prefix">ADDED:</span> Added new default skin for the audio and video controls<br />
				<span class="prefix">ADDED:</span> Our own mediaelement.js to avoid the video resize Bug in WordPress 4.0<br />
				<span class="prefix">ADDED:</span> Option for transparent controls in the video module<br />
				<span class="prefix">ADDED:</span> Option to pages and projects to hide the navigation<br />
				<span class="prefix">ADDED:</span> Option to open bigger version of image in light box on click.<br />
				<span class="prefix">ADDED:</span> All images in a light box will automatically create a gallery inside light box<br />
				<span class="prefix">OTHER:</span> Changed the nav bar & menu defaults for both the out-of-the box
				navbar and the defaults for creating a new custom navbar & menu<br />
				—<br />
				<span class="prefix">FIXED:</span> Bug where fluid non-gutter layouts with 2 cols crashed<br />
				<span class="prefix">FIXED:</span> SVG logos now gets the width and height per CSS<br />
				<span class="prefix">FIXED:</span> Wrong top margin from 404 pages and PW protected pages<br />
				<span class="prefix">FIXED:</span> Multiple spacers in the content editor produced error<br />
				<span class="prefix">FIXED:</span> Blank background-image: url() no bg image error<br />
				<span class="prefix">FIXED:</span> Cover headline images bigger than 1170px don’t scale<br />
				<span class="prefix">FIXED:</span> Width of the cover headline images calculated wrong on mobile<br />
				<span class="prefix">FIXED:</span> Project panel button stays active in the drop down menu<br />
				<span class="prefix">FIXED:</span> Bottom white space on certain pages<br />
				<span class="prefix">FIXED:</span> Font colors gets overwritten after changing the letter spacing<br />
				<span class="prefix">FIXED:</span> Html code entered in the fullscreen cover headline gets displayed as plain text<br />
				<span class="prefix">ADDED:</span> Missing translations to the language files (thanks to Anton)<br />
			</p>
			<h4 class="mt30">Version 1.1.0 - September 22, 2014</h4>
			<p>
				<span class="prefix">ADDED:</span> Source code view for the WYSIWYG Editor<br />
				<span class="prefix">ADDED:</span> Create multiple portfolios through categories<br />
				<span class="prefix">ADDED:</span> Edit letter spacing to the WYSIWYG Editor<br />
				<span class="prefix">ADDED:</span> Duplicate content blocks functionality in content editor<br />
				<span class="prefix">ADDED:</span> Instagram Icon to social networks in navigation<br />
				<span class="prefix">ADDED:</span> Option to switch between buttons & icons for sharing bar<br />
				<span class="prefix">ADDED:</span> Edit the link active state (text and background) in custom navbar<br />
				<span class="prefix">ADDED:</span> Use existing pages/projects as a template for new pages/projects<br />
				<span class="prefix">ADDED:</span> Remove format function for the WYSIWYG editor<br />
				<span class="prefix">ADDED:</span> Open link on image in new or same tab option<br />
				<span class="prefix">ADDED:</span> Color the back to top arrow<br />
				<span class="prefix">ADDED:</span> Paste text WYSIWYG editor gets converted to plain text per default<br />
				<span class="prefix">ADDED:</span> Edit the font weight in the custom navbar<br />
				<span class="prefix">ADDED:</span> Add a poster image to an self hosted video<br />
				<span class="prefix">ADDED:</span> Hide the project panel (both in header or footer)<br />
				—<br />
				<span class="prefix">FIXED:</span> Endless loading bug on Content Editor resolved<br />
				<span class="prefix">FIXED:</span> Row inner background in multi columns now transparent per default<br />
				<span class="prefix">FIXED:</span> Fixed hidden social icons in safari (both on osx and ios)<br />
				<span class="prefix">FIXED:</span> No gutter multi column layout breaks on safari and ios<br />
				<span class="prefix">FIXED:</span> Fullscreen video cover fallback BG image scale on mobile<br />
				<span class="prefix">FIXED:</span> Text transform option on fullscreen cover not being applied<br />
				<span class="prefix">FIXED:</span> Fullscreen cover to scroll down with the project panel<br />
				<span class="prefix">FIXED:</span> Background-position not resetting changing from actual size to full-width<br />
				<span class="prefix">FIXED:</span> On retina devices the wysiwyg editor icons didn’t show up<br />
				<span class="prefix">FIXED:</span> Default link color didn’t applied to content editor pages<br />
				<span class="prefix">FIXED:</span> Multi column contents left margin gets overwritten<br />
				<span class="prefix">FIXED:</span> Fullscreen cover to scroll down with the project panel<br />
				<span class="prefix">FIXED:</span> Fullscreen cover scale fails after clicking on the project panel button<br />
				<span class="prefix">FIXED:</span> SVG logo’s clickable area exceeds the navbar if no height defined in SVG<br />
				<span class="prefix">FIXED:</span> Multi column module shows two columns on 767px breakpoint<br />
				<span class="prefix">FIXED:</span> Theme options button link in the admin bar<br />
				<span class="prefix">FIXED:</span> Branding now correctly applies to body instead of the content holder<br />
			</p>
			<h4 class="mt30">Version 1.0.0 - August 3, 2014</h4>
			<p>
				<span class="prefix">First release</span>
			</p>
		</div>
	</section>
</div>