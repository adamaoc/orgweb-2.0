
<footer class="sitefooter">
	<div class="row">
		<nav class="footer-nav small-12 columns">
			<p><a href="#">home</a> | <a href="#">about</a> | <a href="#">contact</a> | <a href="#">pricing</a> | <a href="#">seo</a> | <a href="#">secure</a> | <a href="#">social</a> | <a href="#">flexable</a></p>
		</nav>
		<div class="copy small-12 columns">
			<p>&copy;2014 All Rights Reserved | ORG-Websites is a product of <a href="http://ampnetmedia.com" class="ampnet">ampnet(media) <span>a web design and development company</span></a>
		</div>
	</div>
</footer>
    <script src="<?= ASSETS ?>js/base.min.js"></script>
    <script src="<?= ASSETS ?>js/app.js"></script>


<script>
$('#contactform')
	.on('invalid.fndtn.abide', function () {
    var invalid_fields = $(this).find('[data-invalid]');
    $('.errormessage').append("<p><em>Sorry there was an error. Please Try again.</em></p>");
});
	
$('#contactform').on('valid.fndtn.abide', function() {
  // Handle the submission of the form
  	var that = $(this),
		url = that.attr('action'),
		method = that.attr('method'),
		errorcount = 0,
		data = {};
	
	that.find('[name]').each(function(index, value) {
		var that = $(this),
			name = that.attr('name'),
			value = that.val();

		data[name] = value;
	});

	$.ajax({
		url: url,
		type: method,
		data: data,
		success: function(response) {
			that.hide();
			$('.success').show();
		}
	});
});	
</script>

  </body>
</html>