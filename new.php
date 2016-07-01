<?php include '/inc/header.php'; ?>
<title>New text - ShareText</title>
<?php
//turn off error displaying.
ini_set("display_errors", FALSE);
$ip = $_SERVER['REMOTE_ADDR'];
$ip2 = $_SERVER['REMOTE_HOST'];
$date = date("d.m.Y - h:i:sa");
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['code']) === false){
		if(strlen($_POST['code']) < 50000000);
        $filename = "bin/$random.txt";
		// Different ID generators
		$random = substr( md5(rand()), 0, 15);
		#$random = md5(uniqid());
		#$random1 = md5(uniqid());
		#$random = $random1 . md5($random1);
        #$random = base64_encode(microtime(true));
		#$random = sha1(microtime(true).mt_rand(10000,90000));
		#$random = base64_encode(openssl_random_pseudo_bytes(32));
        $filename = "bin/$random.txt";
        $fp = fopen($filename , "w");
        fputs($fp , $_POST['code']);
        fclose($fp);
        header("Location: view?id=$random");
    }
}

?>
<br><br><br>
<div class="container">
	<div class="panel panel-success" align="center">
		<div class="panel-heading">
			<img src="inc/icon.png" width="16px">
			<strong>
				New text
			</strong>
		</div>
		<div class="panel-body" align="center">
			<form action="" method="POST">
        <textarea class="form-control" style="width:100%; height:50%;" name="code" rows="10" placeholder="Enter your text here..."></textarea>
				<br />
				<center>
					<br>
					<input type="submit" class="btn btn-success btn-lg" name="publish" value="Publish">
					<br><br>
					<small>By publishing this document, you agree to the <a href="terms" target="_blank">Terms of Service</a></small>
				</center>
			</form>
		</div>
	</div>
</div>