<!DOCTYPE html>
<meta charset="UTF-8">

<html>
<head>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="stylesheet" type="text/css" href="/font.css"/>
<link rel="stylesheet" type="text/css" href="/styles.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/underscore/underscore.js"></script>

<?php $path = $_SERVER['DOCUMENT_ROOT']; ?> 

<title>Landmark | Gotham Deluxe</title>

</head>

<body>

<?php include($path . "/elements/drawer.php") ?>  
 <?php include($path . "/elements/nav.php"); ?> 
<div class="main" id="main">

    

    <span id="hero">
        <?php include($path . "/elements/hero.php"); ?>
    </span>
        <div class="content">
            
            <div class="section intro" id="intro-section">
                <?php include($path . "/elements/intro.php"); ?>
            </div>


            <div class="section">
                <div class="section-interior">
                    <div class="section-image full">
                        <img src='images/menu-1.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/barstools.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/window-sign.jpg'>
                    </div>
                </div>
            </div>
     


            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote left yellow">
                        <h1><span>Prices are low, the service is super-humanly fast, and the staff is friendly.</span></h1>
                     </div>
                    <div class="section-text">
                        <p>This is a no-frills experience from the moment you walk in the door. Landmarks interior is aged and minimal (for a diner). Nearly everything you touch is a bit rough around the edges, and the floor could use some sweeping, but the vibrant blue tables are kept bright and clean even if the edges are a bit worn out. There’s a pattern of rough edges at Landmark, which isn't a problem. I kind of like them. They remind me of <a href="http://designmind.frogdesign.com/2011/09/aged-perfection/" target="_blank" class="external">this article</a> that talks about things that become better, or at least more attractive, as they age and gather wear. I really enjoy Landmark’s aged interior, it’s in a different sort of class than <a href="/diners/waverly">Waverly</a> or <a href="/diners/remedy-diner">Remedy</a> who have sparkly clean interiors. Landmarks beats them on authenticity, and when it comes to speed and efficiency, Landmark runs circles around the others.</p>
                    </div>
                    <div class="section-image full">
                        <img src='images/interior.jpg'>
                    </div>
                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-text alone">
                        <p>I’ve heard that Landmark is known for their pancakes (which if you order before 11am are $5.95), so I tried them out. For a plain pancake they were great, but I don’t think they were greater than <a href='/diners/cup-and-saucer'>Cup and Saucer</a>. I’ve also tried the silver dollar pancakes combo which I would recommend in a lot of cases. It includes tiny versions of these pancakes plus eggs and sausage or bacon which tastes pretty awesome when you start to mix them up together.</p>
                    </div>

                    <div class="section-image full">
                        <img src='images/pancakes.jpg'>
                    </div>

                    <div class="section-image half">
                        <img src='images/condiments-2.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/bite.jpg'>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large yellow">
                        <h1><span>When it comes to speed and efficiency, Landmark runs circles around the others.<span></h1>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-interior">
                   <div class="section-image full">
                        <img src='images/server.jpg'>
                    </div>
                    <div class="section-text alone">
                        
                        <p>The staff at Landmark is really friendly, but more than that they’re just hard working. One day you might come in and your server will be more hard-working than friendly, but overall everyone there is great.</p>
                    </div>
                    <div class="section-image half">
                        <img src='images/staff-2.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/sandwich-bar.jpg'>
                    </div>

                    <div class="section-image full">
                        <img src='images/empty-tables.jpg'>
                    </div>
                    <div class="section-image full">
                        <img src='images/interior-sign.jpg'>
                    </div>

                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>Landmark is a personal favorite of mine. It's bare-bones but reliable, and it scratches that diner itch without going overboard. Don't miss it.</h1>
                    </div>
                </div>
            </div>


            <div class="section score" id="score">
                <?php include($path . "/elements/scorecard.php"); ?> 
            </div>

    </div>
        <div class="section" id="share">   
        <?php include($path . "/elements/share.php"); ?>
    </div>
        <?php include($path . "/elements/more.php"); ?>  
<?php include($path . "/elements/footer.php") ?>
</div> 
</body>

</html>
