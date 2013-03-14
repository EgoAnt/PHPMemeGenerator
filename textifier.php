<html>
<head>
	<title>Imagetextalizer</title>
	<style>
		*
		{
			font-family: verdana,sans;
			font-size: 12px;
		}
		input[type='text']
		{
			background: #cfcfcf;
			padding: 0px;
			border: 1px solid #999999;
			text-align: left;
		}
		input[type='submit']
		{
			padding: 10px;
			font-size: 1.5em;
			width: 400px;
		}
		.form
		{
			float: left;
			width: 400px;
			border: 1px solid #cfcfcf;
			padding: 1px;
			margin: 3px;
		}
		.field
		{
			float: right;
			width: 200px;
			text-align: right;
		}
		.row
		{
			float: left;
			width: 400px;
			border-bottom: 1px solid #cfcfcf;
			padding: 3px 0 3px 0;
		}
	</style>
</head>
<body>
	<?
	$imgURL = 'pwn.jpg';
	if(isset($_GET['imgurl']))
	{
		$imgURL = $_GET['imgurl'];
		echo "<div><img src='img.php?imgurl=".urlencode($_GET['imgurl'])."&toptext=".urlencode($_GET['toptext'])."&bottomtext=".urlencode($_GET['bottomtext'])."'/></div>";
	}
	?>
	<form action="textifier.php" method="get">
		<div class='form'>
		<div class='row'>
		<div class='field'><input type="text" name="imgurl" value="<? echo $imgURL; ?>"/></div>
		<p>Source image (URL):<br />
		<em>Must be a JPG!</em></p>
		</div>
		<div class='row'><div class='field'><input type="text" name="toptext" value="<? echo $_GET['toptext']; ?>"/></div>Top text:</div>
		<div class='row'><div class='field'><input type="text" name="bottomtext" value="<? echo $_GET['bottomtext']; ?>"/></div>Bottom text:</div>
		<input type="submit" value="Textify!" />
		</div>
	</form>
	<p><a href='gd-text.zip'>Download the source code</a></p>
    <div class="redWidget">
	<script type="text/javascript" src="http://kearney.machighway.com/~redtheag/dwv/widgets/scripts/rsswidget.js"></script>
	</div>
</body>
</html>