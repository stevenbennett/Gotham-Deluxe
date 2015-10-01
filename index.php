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
        <h2>Dedicated to finding the best diners in New York city, Gotham Deluxe aims to celebrate the comfort and convenince of the classic American diner. In contrast to the rushed, crowded, unforgiving city, a good diner is a place where a New Yorker can sit in a comfortable booth and recharge.</h2>
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
       
    </div>


  
<?php include($path . "/elements/footer.php") ?>

</body>

</html>
