<?php require_once('library/timecode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test of Some Simple SMPTE functions in PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<meta charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>
</head>
<body>
<header>
	<h1>Some simple SMPTE classes in PHP</h1>
	<nav><a href="index.php">Home</a></nav>
</header>
<section>
	<article>
		<h3>Three simple tests</h3>
		<ul>
			<li><a href="debug.php">Debug</a></li>
			<li><a href="math.php">Match</a></li>
			<li><a href="batch.php">Batch</a></li>
		</ul>
	</article>
</section>
<footer>
	<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
     data-address="1Dzh4YhhCiCRUQMPNcps9LwVQbvfXaPVdM"
     data-shared="false">
    <div class="blockchain stage-begin">
        <img src="https://blockchain.info//Resources/buttons/donate_64.png"/>
        <p>If you like the code, consider donating :)</p>
    </div>
    <div class="blockchain stage-loading" style="text-align:center">
        <img src="https://blockchain.info//Resources/loading-large.gif"/>
    </div>
    <div class="blockchain stage-ready">
         <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
         <p align="center" class="qr-code"></p>
    </div>
    <div class="blockchain stage-paid">
         Donation of <b>[[value]] BTC</b> Received. Thank You.
    </div>
    <div class="blockchain stage-error">
        <font color="red">[[error]]</font>
    </div>
</div></footer>
</body>
</html>