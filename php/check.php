<!doctype html>
<head>
<!-- Bootstrap CSS and JS -->
<!-- HTML5 is the ~~boilerplate~~ for now -->
<!-- Validation Added -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css" rel="stylesheet">	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"> </script>
<title>PHP - Task 2</title>
</head>
<body>
	<!-- Form Begins -->
	<h1 class="text-center"> Enter your details </h1>
	<div class="container col-md-6 col-md-offset-3">
	<form action="my_details.php" onsubmit="return validate()" method="POST">
	<fieldset>
		<div class="form-group">	
		<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" style="cursor: auto;" required pattern="..+">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" style="cursor: auto;" required pattern=".+@.+">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="github" id="github" placeholder="Your Github Profile" style="cursor: auto;">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="facebook" id="facebook" placeholder="Your FB Profile" style="cursor: auto;">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="website" id="website" placeholder="Website" style="cursor: auto;">
		</div>
                 
   		<div class="form-group">
    		<button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
      		</div>
	</fieldset>
	</form>
  	</div>
	<!-- Form Ends -->
	<!--Validating the input-->
	<script type="text/javascript">
	function validate() {
        //Client side validation using JS
        window.alert("Debugging");
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var github = document.getElementById("github").value;
        var facebook = document.getElementById("facebook").value;
        var website = document.getElementById("website").value;
        if (!(name.length))
            window.alert("Please enter a valid name");
        emailreg = /\w+@.\w+\.\w+/; //Blame ICANN for the crazy TLDs
        if (!emailreg.test(email))
            window.alert("Please enter a valid email");
        else 
        	console.log("Hi");
        /*githubreg = /github.com\/.\w+/;
        if (!githubreg.test(github))
            window.alert("Please enter a valid github URL");*/ // TODO: Pad with github.com URL automatically if user enters just the username --Done in Server side
        //FB and Website are non-essential. We will take care of that in the server side using PHP
    }
	</script>
</body>
</html>
