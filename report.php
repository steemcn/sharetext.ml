<?php include '/inc/header.php'; ?>
<?php
//turn off error displaying.
ini_set("display_errors",FALSE);
$doc = $_GET['doc'];
?>
<title>Report a document | ShareText</title>
<br><br><br>
<div class="container">
	<div class="panel panel-success" align="center">
		<div class="panel-heading">
			<img src="/inc/icon.png" width="16px">
			<strong>
				Report a shared document
			</strong>
			- 
			<small>
				We are sorry to see that you don't like this document, and we will try to prevent simular documents in the future!
			</small>
		</div>
		<div class="panel-body">
			<h4>You can report a document by sending an email to <a href="mailto:sharetext.ml@gmail.com?subject=Report Document with ID <?php echo $_GET['doc']; ?>">sharetext.ml@gmail.com</a>.<br><br>
			Please include a description of why you want this document taken down, and a link to the document! <br><br>
			Also make sure to read the <a href="/terms" target="_blank">Terms of Service</a> to make sure that the document is violating our rules before reporting it.<br><br>
			You can report a document even if it isn't violating our rules, but it may not get taken down.<br><br>
			The document you clicked "report" on is <b>https://sharetext.ml/view/<?php echo $_GET['doc']; ?></b><b></h4>
		</div>
	</div>
	<div class="panel panel-success">
		<div class="panel-body" align="center">
		<h3><b>A preview of the document can be found below:</h3>
<textarea class="form-control" style="width:100%; height:50%;" name="code" rows="10">
<?php
$filename = "bin/$doc.txt";
$handle = fopen ($filename, "r");
$contents = fread ($handle, filesize ($filename));
fclose ($handle);
print $contents;
?>
</textarea>
		</div>
	</div>
</div>