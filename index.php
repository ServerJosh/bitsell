<?php
//BitSell Connection 0.1
// Copyright BitSell team
include("includes/main.php");
if($setup == "no") {
header("location: setup");
}
else 
{
if (file_exists("setup")) {
    die("Security error! <b>Please delete the 'setup' folder for this software to function.");
    
} 

// continue on with system 
echo " 
";


}
?>
<!DOCTYPE HTML>
<!--
    Helios 1.5 by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>BitSell</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
            <link rel="stylesheet" href="css/style-noscript.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    </head>
    <body class="homepage">
$btcrate = file_get_contents("https://bleutrade.com/api/v1/calculator?from_coin=btc&value=1&to_coin=USD");
        <!-- Header -->
            <div id="header">
                        
                <!-- Inner -->
                    <div class="inner">
                        <header>
                        <h1 id="logo">BitSellATM</h1><br />
Please select your currency that you wish to withdraw to.<br /><br />
<a href=order/?type=BTC class="button circled scrolly">BTC</a> 
<a href=order/?type=DOGE class="button circled scrolly">DGC</a>   
<a href=order/?type=DRK class="button circled scrolly">DRK</a>
<a href=order/?type=LTC class="button circled scrolly">LTC</a>
<a href=order/?type=NMC class="button circled scrolly">NMC</a>
<a href=order/?type=QRK class="button circled scrolly">QRK</a>
<br/>
<div class="button circled scrolly">
1 BTC to USD rate:
$<?php echo $btcrate; ?>
</div>

<!-- Close tags !-->
</div>
</body>
</html>
