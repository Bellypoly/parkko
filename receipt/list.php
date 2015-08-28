<?php
include("../var.php");
?>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="../css/customized-bootstrap.css">
		<link rel="stylesheet" href="../css/boon.css">
	</head>
	<body>
		<?php foreach ($data as  $record){?>
		<a href="show.php?id=<?php echo $record["id"];?>" target="_blank" style="text-decoration: none; font-weight:bold;">
		<div style="border: 2px solid #000; background-color:#fff; width:200px; text-align:center; padding:20px;">
			<?php echo $record["license"];?><br/>
			<?php echo $record["province"];?>
		</div>
		</a>
		<div style="height:30px;"></div>
		<?php }?>
	</body> 
</html> 