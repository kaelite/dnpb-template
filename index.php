<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>DNPB Library Template</title>
		
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/dnpb.css">
		<link rel="stylesheet" href="./css/fonts.css">
		<? include("./templates/favicon.tpl")?>

	</head>
	<body>
		
		<!-- JavaScipt -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- JavaScipt -->
		<script>
		  $(function(){


			});
		</script>
		<header>
<? include("./templates/header.php") ?>
		</header>


		<main>
<? 
switch($_GET["page"]){
default:
	include("./templates/standart_layout.php");
}
?>
		</main>



<!-- Footer -->		
		<footer class="footer">
<? include("./templates/footer.php") ?>
		</footer>
<!-- Footer -->		
	</body>
</html>
