
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="<?php bloginfo('template_url'); ?>/build/intlTelInput.js"></script>
  	<script>
  		$("#phone").intlTelInput({
      	// allowDropdown: false,
      	// autoHideDialCode: false,
      	// autoPlaceholder: "off",
      	// dropdownContainer: "body",
      	// excludeCountries: ["us"],
      	// formatOnDisplay: false,
      	// geoIpLookup: function(callback) {
      	//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      	//     var countryCode = (resp && resp.country) ? resp.country : "";
      	//     callback(countryCode);
      	//   });
      	// },
      	// hiddenInput: "full_number",
      	// initialCountry: "auto",
      	// nationalMode: false,
      	// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      	// placeholderNumberType: "MOBILE",
      	// preferredCountries: ['cn', 'jp'],
      	// separateDialCode: true,
      	utilsScript: "wp-content/themes/freewifi/build/utils.js"
    	});
  	</script>
    <script>
      var $form = $('form#test-form'),
      url = 'https://script.google.com/macros/s/AKfycbwOHkCv4N_XtQXXQ2fKs9UDO41zevOfe3NW-6QAUYpWQGj-Pu0/exec'

      $('#submit-form').on('click', function(e) {
        e.preventDefault();
        var jqxhr = $.ajax({
          url: url,
          method: "GET",
          dataType: "json",
          data: $form.serializeObject()
        }).success(
          // do something
        );
      })
    </script>
</body>
</html>