<?php include 'inc/header.php'; ?>
<title><?php echo $_GET['id']; ?> - ShareText.ml</title>
<?php
//turn off error displaying.
ini_set("display_errors",FALSE);
$id = $_GET['id'];
?>
<br><br><br>
<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
			<strong>
					<input class="form-control" onfocus="this.select();" onmouseup="return false;" type="text" value="https://sharetext.ml/view/<?php echo $_GET['id']; ?>">
			</strong>
		</div>
		<div class="panel-body" align="center">
<textarea class="form-control" style="width:100%; height:50%;" name="code" rows="10">
<?php
$filename = "bin/$id.txt";
$handle = fopen ($filename, "r");
$contents = fread ($handle, filesize ($filename));
fclose ($handle);
print $contents;
?>
</textarea>
		</div>
	</div>
	<div class="panel panel-success" align="center">
		<div class="panel-body">
			This document is hosted by <a href="index">ShareText.ml</a>. <a href="report/<?php echo $_GET['id']; ?>" target="_blank">Report Document</a>.
		</div>
	</div>
</div>