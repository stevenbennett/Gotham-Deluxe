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

<title>Cup and Saucer | Gotham Deluxe</title>

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
                        <img src='images/bar.jpg'>
                    </div>
                    <div class="section-image half">
                            <img src='images/donuts.jpg'>
                        </div>
                        <div class="section-image half">
                            <img src='images/sign.jpg'>
                        </div>
                </div>
            </div>  

            <div class="section">
                <div class="section-interior">
                    <div class="section-detail left">
                        <div class="section-detail-content">
                            <img src='images/menu2.jpg'>
                            <div class="section-image-caption yellow">
                             <p>Ordering is easy if breakfast is your thing. The breakfast special runs from 6-11am and starts at $5.00. You won't even need to open the menu to find it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-text">
                        <p>The interior is tiny but compliments the warm atmosphere well. It's split into two rows of counter seating (one facing the big windows the other facing the kitchen). The option on your right will give you a good view of the bustling street, and on your left you can watch the staff as they work, both are good options. One caveat is that if you’re anywhere close to six feet tall and you sit facing the kitchen you'll have to be creative with your leg placement. Space is tight to the point of being uncomfortable for taller folks.</p>
                         <p>The servers were really, genuinely friendly and attentive. They refilled our coffee and shuffled condiments around the countertop for other guests as we ate. Watching them at work and goofing around with each other was another highlight. It was pretty busy that morning, which at some restaurants can sometimes make you feel like you have to rush through your meal, but I didn’t feel much of that here.</p>
                    </div>


                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-image full">
                        <img src='images/girl.jpg'>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote left yellow">
                        <h1><span>Like a lot of great diners, Cup and Saucer doesn't try to be dazzling or sensational, they focus on efficiency and accommodation.</span></h1>
                    </div>
                    <div class="section-image reduced neighbor">
                        <img src='images/pancakes.jpg'>
                        <div class="section-image-caption red">
                            <p>The pancakes and bacon were part of the breakfast special where you get a reasonable (but surmountable) amount of food for about $5. They'll let you use a credit card if you spend $12.</p>
                        </div>
                    </div>
                    <div class="section-text alone">
                        <p>I got chocolate chip pancakes, bacon, and coffee. I liked the way they served it with bacon right on top, like they were trying to preserve as much square footage as possible. Pretty thoughtful. The pancakes weren’t special, but they were a little bit better than something you would make at home with store-bought mix. They probably were made from something like that, but they tasted good that day and they're comparable to <a href="/diners/landmark">Landmark</a> in price and quality. The coffee was great diner coffee. I thought the meal and the overall experience was pretty fantastic. The food was cheap and tasty, the staff was friendly, and the morning atmosphere was warm and comfortable.</p>
                    </div>

                        <div class="section-image half">
                            <img src='images/coffee-machine.jpg'>
                        </div>
                        <div class="section-image half">
                            <img src='images/interior2.jpg'>
                        </div>
                        <div class="section-image full">
                            <img src='images/corner2.jpg'>
                        </div>
                </div>
            </div>

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>Cup and Saucer isn't perfect, but it's easy to recommend. Even though the seating is a little tight, it's really easy to enjoy yourself because the staff is so friendly and the neighborhood is top notch.</h1>
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
