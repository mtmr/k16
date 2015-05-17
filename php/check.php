<!doctype html>
<head>
<!-- Bootstrap CSS and JS -->
<!-- Saves reinventing the wheel and takes care of basic validation , Besides, no regex is perfect-->
<!--link rel="stylesheet/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css"-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css" rel="stylesheet">	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"> </script>
<title>PHP - Task 2</title>
</head>
<body>
	<!-- Form Begins -->
	<h1 class="text-center"> Enter your details </h1>
	<div class="container col-md-6 col-md-offset-3">
	<form action="my_details.php" method="POST">
	<fieldset>
		<div class="form-group">	
		<input type="text" class="form-control" name="name" placeholder="Your Name" style="cursor: auto;" required pattern="..+">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Your Email" style="cursor: auto;" required pattern=".+@.+">
		</div>
		<div class="form-group">
			<input type="url" class="form-control" name="github" placeholder="Your Github Profile" style="cursor: auto;">
		</div>
		<div class="form-group">
			<input type="url" class="form-control" name="facebook" placeholder="Your FB Profile" style="cursor: auto;">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="website" placeholder="Website" style="cursor: auto;">
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
	<!--script type="text/javascript"">
	function validate()
	{
		//TODO: Update to Manual Validation
		var name=document.getElementbyID("name").value;
		var email=document.getElementbyID("email").value;
		var github=document.getElementbyID("github").value;
		var facebook=document.getElementbyID("facebook").value;
		var website=document.getElementbyID("website").value;
	}
	</script-->
</body>
</html>
