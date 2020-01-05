<?php
    //Set file parameters here by POST or declaration
    $config = array(
        "f" => isset($_POST[ "f"]) ? htmlspecialchars($_POST['f']) : "demo", //fileurl
        "t" => isset($_POST[ "t"]) ? htmlspecialchars($_POST['t']) : "CraftyCivet", //window title
        "o" => isset($_POST[ "o"]) ? htmlspecialchars($_POST['o']) : FALSE, //open
        "p" => isset($_POST[ "p"]) ? htmlspecialchars($_POST['p']) : FALSE, //print
        "d" => isset($_POST[ "d"]) ? htmlspecialchars($_POST['d']) : FALSE, //download
        "c" => isset($_POST[ "c"]) ? htmlspecialchars($_POST['c']) : FALSE, //contextmenu
        "s" => isset($_POST[ "s"]) ? htmlspecialchars($_POST['s']) : FALSE, //textselect
        "i" => isset($_POST[ "i"]) ? htmlspecialchars($_POST['i']) : FALSE  //view docinfo 
    );
    $frame = "web/viewer.php?file=../docs/".$config["f"]."&t=".$config["t"];
    $i = 1;
    foreach($config as $key => $val) {
        if($val and $key != "f" and $key != "t") {
            $frame .= "&".$key."=".dechex($i*11111);
        }
        $i++;
    }
?>
<html oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta name="google" content="notranslate">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $config["t"];?></title>
    <style type="text/css">
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			overflow: hidden;
		}
		.content {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0;
			top: 0;
		}		
		@media print {
			body {display:none;}
		}
	</style>
</head>
<body>
	<div class="content">
		<iframe height=100% width=100% src="<?php echo htmlspecialchars($frame); ?>" allowfullscreen="true" frameborder="0" />
	</div>
</body>
</html>
