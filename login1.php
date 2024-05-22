<?php

	session_start();

   $username = "root";
   $password = "";
   $dbname = "midexamDB";
   $servername = "localhost";

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   else
       echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Web Systems and Technologies Final Exam</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/jumbotron.css" rel="stylesheet">
 </head>
<body>
	<!-- DO NOT MIND THE CLASSES SINCE IT REFERS TO BOOTSTRAP CSS. THERE IS NO ERROR ON THAT-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Bootstrap/PHP/Database</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<!--LOGIN FORM STARTS HERE-->
				<form class="navbar-form navbar-right" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="memberid">
					</div>
					<div class="form-group">
              			<input type="password" class="form-control" name="password">
 					</div>
					<button type="submit" class="btn btn-success" name="signin">Sign in</button>
				</form>
			</div><!--/.navbar-collapse -->
			<?php

		

				if (isset($_POST['signin'])) {
	                $memberid = $_POST["memberid"];
                    $password = $_POST["password"];
									      		
					$select_query=$conn->prepare("SELECT * FROM `member` WHERE MemberID = ? AND password = ?");
	                $select_query->bind_param("is", $memberid, $password);
	                $select_query->execute();
	                $select_query->store_result();

	                if ($select_query->fetch()) 
						header("location: index.php");	
	                else 
						echo '<h6 style="color:white;">No record found!</h6>';	
				}
				
			?>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1>The Tech List</h1>
			<p>This is just a sample template for an Technology forum. Articles found here are from an existing web forum website.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		</div>
	</div>
	
	<hr>
	
	<div>
		<footer>
			<p>&copy; 2023 Web Prog Exam</p>
		</footer>
	</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>