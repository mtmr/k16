<!doctype html>
<head>
<!-- Bootstrap CSS and JS -->
<!-- takes care of basic validation , Besides, no regex is perfect-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css"-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"> </script>
<title>PHP - Task 2</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3">
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
	  echo "<tr>";
	  echo "<td>".$key."</td>";
	  echo "<td>".$value."</td>";
	  echo "</tr>";
	}
?>
  </tbody>
</table>
</div>
</body>
</html>
