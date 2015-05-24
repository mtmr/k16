<!doctype html>
<head>
<!-- Bootstrap CSS and JS -->
<!--HTML5 takes care of basic validation , Besides, no regex is perfect-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css"-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"> </script>
<title>PHP - Task 2</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3">
<h3 class="text-center">Your Details</h3>
<table class="table table-striped table-hover">
  <thead>
  <tr>
  <th>Field</th>
  <th>Value</th>
  </tr>
  </thead>
  <tbody>
  <?php
 	foreach($_POST as $key => $value)
	{
    $details[$key]=$value;
	}
  $name = trim($details['name']); //Remove Extraneous White space
  $email = trim($details['email']);
  $facebook = trim($details['facebook']);
  //We want to display the FB url as a Link
  if(!stripos($facebook, "facebook.com") || !stripos($facebook, "fb.com")) // Don't forget to check for fb.com
    $facebook = "http://facebook.com/" . $facebook;
  else
    $facebook = "http://".$facebook;
  $github = trim($details['github']);
  if(!stripos($github, "github.com"))
    $github = "http://github.com/" . $github;
  else
    $github = "http://".$github;
  $website = "http://".$details['website'];
  //TODO: Make an array and loop through them instead of this 
  echo "<tr>";
  echo "<td> Name</td>";
  echo "<td>".$name."</td>" ;
  echo "</tr>";
  echo "<tr>";
  echo "<td> Email</td>";
  echo "<td>".$email."</td>" ;
  echo "</tr>";
  echo "<tr>";
  echo "<td> Facebook</td>";
  echo "<td> <a href=\"".$facebook."\"> Facebook</a></td>" ;
  echo "</tr>";
  echo "<tr>";
  echo "<td> Github</td>";
  echo "<td> <a href=\"".$github."\"> Github Profile</a></td>" ;
  echo "</tr>";
  echo "<tr>";
  echo "<td> Email</td>";
  echo "<td> <a href=\"".$website."\"> Website</a></td>" ;
  echo "</tr>";
?>
  </tbody>
</table>
</div>
</body>
</html>
