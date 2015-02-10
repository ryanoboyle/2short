<?php

$toWrite = '$logURL = "' . $_POST['logName'] . '";
$contact = "' . $_POST['email'] . '";
$idLength = ' . $_POST['idLen'] . '; ?>';

$worked = file_put_contents("../config.php", $toWrite, FILE_APPEND);

if ($worked==false){
	$status = "ERROR: Filewrite failed.";
} else {
	$status = "Success! <font color=\"#FF0000\">Just delete the directory 'install'</font> and your URL shortener will be ready!";
}

?>

<html>
<head>
	<title>2short Installer -- Page 2</title>
	<style type="text/css">
	body {
		padding: 50px;
		font-family: Verdana, Geneva, sans-serif;
		font-size: 14pt;
	}
	</style>
</head>
<body>
	
	<h2>2short Installer</h2>
    
    <strong><?php echo $status; ?></strong>

</body>
</html>