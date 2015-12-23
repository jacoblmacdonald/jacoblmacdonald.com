<form id="email-form">
	<p class="spinner"><span></span></p>
	<p id="email-form-failure"></p>
	<div class="form-row">
		<label for="email">Email Address:</label>
		<input id="email" name="email">
	</div>
	<div class="form-row">
		<label for="subject">Subject:</label>
		<input id="subject" name="subject">
	</div>
	<div class="form-row">
		<label for="body">Body:</label>
		<textarea id="body" name="body" rows=10></textarea>
	</div>
	<p class="confirm">
		<span>Send<span class="contact-icon"><?= load_svg("/icons/mail.svg"); ?></span><span class="contact-email"> to jacob@jacoblmacdonald.com</span>
	</p>
</form>
<div id="email-form-success">
	<p>Thank you! I'll be in touch.</p>
</div>