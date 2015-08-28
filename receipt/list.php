<?
include("../var.php");
?>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="../css/customized-bootstrap.css">
		<link rel="stylesheet" href="../css/boon.css">
	</head>
	<body>
		<? foreach ($data as  $record){?>
		<a href="show.php?id=<?=$record["id"];?>" target="_blank" style="text-decoration: none; font-weight:bold;">
		<div style="border: 2px solid #000; background-color:#fff; width:200px; text-align:center; padding:20px;">
			<?=$record["license"];?><br/>
			<?=$record["province"];?>
		</div>
		</a>
		<div style="height:30px;"></div>
		<?}?>
	</body>
</html>