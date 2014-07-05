<form id="contactform" data-abide="ajax" action="/contact/email/" method="post">
	<div class="errormessage"></div>
	<div class="name-field">
		<label for="name">Your name <small>required</small>
			<input type="text" name="name" class="name" required>
		</label>
		<small class="error">Name is required and must be a string.</small>
	</div>

	<div class="email-field">
		<label for="email">Email <small>required</small>
			<input type="email" name="email" class="email" required pattern="email">
		</label>
		<small class="error">An email address is required.</small>
	</div>
	
	<div class="message-field">
		<label for="message">Message <small>required</small>
			<textarea name="message" class="message" required></textarea>
		</label>
		<small class="error">You must submit a message.</small>
	</div>

	<button type="submit" class="button secondary right">Send</button>
</form>

<section class="success" style="display:none">
	<h3>Success!</h3>
	<p>Thanks for sending us your message! We'll be looking it over and getting back with you as soon as possible. Please feel free to look around some more or take some time and check us out on social media.</p>
</section>