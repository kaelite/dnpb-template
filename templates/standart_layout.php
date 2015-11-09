<div class="container">
	<div class="row">
		<div class="col-md-8">
<?
if(!empty($_GET["page"]))
{
		switch($_GET["page"]){
		case "inner1":
			include("content/inner1.php");
			break;
		case "announceslist":
			include("content/announceslist.php");
			break;
		case "mediapage":
			include("content/mediapage.php");
			break;
		default:
			include("content/homepage.php");
			break;
		}
}else{
	include("content/homepage.php");
}
?>
		</div>
		<div class="col-md-4">
			<? include("right.php") ?>
		</div>
	</div>
</div>
