<!DOCTYPE html>
<meta charset="UTF-8">

<html>
<head>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="stylesheet" type="text/css" href="font.css"/>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<?php $path = $_SERVER['DOCUMENT_ROOT']; ?> 
<title>Gotham Deluxe</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/underscore/underscore.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body class="home">

<?php include($path . "/elements/drawer.php") ?> 

<div class="main home" id="main">
    <?php include($path . "/elements/home-header.php"); ?> 
    <div class="home-header">
        <div class="home-title">
        <h1>GOTHAM DELUXE</h1>
        <h2>Diners of New York</h2>
        </div>
    </div>

    <div class="content home"> 

        <div class="section" id="diners">
            <?php
            $dinerlist = array_diff(scandir($path . "/diners",1), array('..', '.', '.DS_Store','error_log'));
            sort($dinerlist);
            include("elements/dinercard-home.php");
            ?> 
        </div>
    
    <div class="center">
        <h1>Up Next:</h1>
        <ul>
            <li><a target="blank" href="https://www.google.com/maps/place/The+Diner/@40.7417865,-74.0060475,15.74z/data=!4m2!3m1!1s0x0000000000000000:0x0a6f4c4e05de056c">The Diner</a></li>
            <li><a target="blank" href="https://www.google.com/maps/place/Square+Diner/@40.718469,-74.0072485,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25a1fe53370f1:0x8bc4aea00d7970fc">Square Diner</a></li>
            <li><a target="blank" href="https://twitter.com/gothamdeluxe" class="red">Suggest a Diner</a></li>
        </ul>
    </div>    
    </div>


  
<?php include($path . "/elements/footer.php") ?>

</body>

</html>
