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

<title>Square Diner | Gotham Deluxe</title>

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
                    <img src='images/exterior3.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/exterior-sign.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/interior-booth.jpg'>
                </div>
                <div class="section-image full">
                    <img src='images/bar-front.jpg'>
                </div>
                
            </div>
        </div>  
        <div class="section">
            <div class="section-interior">
            <div class="section-detail left">
                    <div class="section-detail-content">
                        <img src='images/ceiling.jpg'>
                        <div class="section-image-caption yellow">
                         <p>The rounded ceiling, unique lighting, and long slender interior of Square Diner made me feel like I was in the hull of a ship. Many aspects of this diner have a naval vibe.</p>
                        </div>
                    </div>
                </div>
                <div class="section-text">
                    <p>Though small, it’s hard to miss this  diner. Square Diner's outdoor seating spills out onto the sidewalk and its bold, blue exterior make it easy to spot. In true standalone diner fashion, the shape of this little restaurant is dictated complete;y by the extra space allotted by the neighboring buildings. Because of this, Square Diner is far from square, and inside you'll find lots of interestig little nooks that fill the alloted space. I would recommend checking out the restroom while you’re here because it’s pretty adorable and gives you an idea of the constraints these types of standalone restaurants have to work with.</p>
                </div>
            
                 <div class="section-image reduced">
                            <img src='images/interior-depth.jpg'>
                    </div>
                    <div class="section-text alone">
                    <p>As far as the interior decoration goes, I think Square goes a little overboard. In some areas the  memorabilia on display is  cute and quirky and results in a nice atmosphere, but in others it feels pretty forced. I really liked the area next to the bar (on the left when you walk in), mostly because there isn’t enough space for them to fit memorabilia. In some areas Square Diner feels more like some sort of boat themed restaurant than a diner, but the effect is mostly fun and charming.
</p>
                </div>
                <div class="section-blockquote large">
                        <h1><span>In some areas the  memorabilia on display is really cute and quirky and makes for a nice atmosphere, but in others it feels pretty forced.</span></h1>
                </div>
                
                <div class="section-image half">
                        <img src='images/booth2.jpg'>
                </div>
                <div class="section-image half">
                        <img src='images/kitchen.jpg'>
                </div>
                <div class="section-image full">
                        <img src='images/food.jpg'>
                </div>
                <div class="section-text alone">
                    <p>The food here is definitely satisfactory if you’re hunting for diner food. I wanted to test out their burger, but this was one of four diners I had visited in two days and at the time I physically couldn’t eat another burger. Instead I ordered the gyro and it was insanely good. Way, way better then the Gyro at <a href="/diners/waverly"><span>Waverly</span></a>, and probably the best one I’ve ever had. Like I said before I wasn’t very hungry, but despite that I was really digging the gyro. I also got to try the belgian waffle and chicken sandwich, both of which were normal (good).</p>
                </div>
                <div class="section-image reduced">
                    <img src='images/gyro.jpg'>
                    <div class="section-image-caption">
                        <p>A really, really good gyro. I wonder if their burger is this good. That would be an excellent burger.</p>
                    </div>
                </div>
                <div class="section-image full">
                    <img src='images/waffles-closeup.jpg'>
                </div>

                <div class="section-image half">
                    <img src='images/interior-close.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/interior-wide2.jpg'>
                </div>
                <div class="section-image full">
                    <img src='images/exterior-skaters.jpg'>
                </div>
            </div>
        </div>

        <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>I want Square Diner to be exceptional, if only to keep it alive as a standalone diner. Unfortunately it’s just average. The atmosphere is forced and the food is satisfactory. There’s nothing special here, but there's no reason not to go back.</h1>
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
