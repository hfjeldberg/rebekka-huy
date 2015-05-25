<div id="grid"></div>
<div id="semplice-content"></div>
<div class="semplice-ce-default">
	<div class="container">
		<div class="row">
			<div class="span12">
				<img class="heading" src="<?php echo get_bloginfo('template_directory'); ?>/content-editor/images/ce_default_heading.png" alt="Editor default heading">
				
				<div class="default-adder">
					<ul>
						<li><a class="add-content p" data-content-type="content-p"></a></li>
						<li><a class="add-content img" data-content-type="content-img"></a></li>
						<li><a class="add-content gallery" data-content-type="content-gallery"></a></li>
						<li><a class="add-content video" data-content-type="content-video"></a></li>
						<li><a class="add-content audio" data-content-type="content-audio"></a></li>
						<li><a class="add-content oembed" data-content-type="content-oembed"></a></li>
						<li><a class="add-content spacer" data-content-type="content-spacer"></a></li>
						<li><a class="add-content thumbnails" data-content-type="content-thumbnails"></a></li>
						<li><a class="add-content mc" data-content-type="multi-column"></a></li>
					</ul>
					<a class="load-template" data-template-id="ce-default">Or load some demo content</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="loader">Working</div>
<div class="confirm">
	<div class="text">
		<h4>Confirm</h4>
		<p>Are you sure you want to<br />delete this content?</p>
	</div>
	<ul>
		<li><a class="remove-confirm" data-content-id="" data-is-column="" data-parent-id="">Yes</a></li>
		<li><a class="remove-decline">No</a></li>
	</ul>
</div>
<div class="cancel">
	<div class="text">
		<h4>Confirm</h4>
		<p>Do you want to<br />exit without saving?</p>
	</div>
	<ul>
		<li><a class="cancel-confirm">Yes</a></li>
		<li><a class="cancel-decline">No</a></li>
	</ul>
</div>
<div class="confirm-template">
	<div class="text">
		<h4>Are you sure?</h4>
		<p>Your current progress<br />will be overwritten!</p>
	</div>
	<ul>
		<li><a class="template-confirm">Yes</a></li>
		<li><a class="template-decline">No</a></li>
	</ul>
</div>
<div class="overlay"><!-- overlay --></div>
<div class="no-images"><p><strong>No Images on edit?</strong> If you can't see any images after you click on an image to edit it please import the templates.xml from your theme folder into wordpress and make sure to download the attachments!</p><br /><a class="ce-dismiss">Close</a></div>