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

<title>La Bonbonniere | Gotham Deluxe</title>

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
                    <div class="section-image half">
                        <img src='images/outside-sign.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/interior-back.jpg'>
                    </div>
                    <div class="section-image full">
                        <img src='images/interior-booths.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/bar2.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/menu.jpg'>
                    </div>
                </div>
            </div>
     


            <div class="section">
                <div class="section-interior">
                    <div class="section-detail left">
                        <div class="section-detail-content">
                            <img src='images/interior-table-close.jpg'>
                            <div class="section-image-caption yellow">
                             <p>I liked these little tables a lot more than the ugly booths. They were simple, understated and charming.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-text">
                        <p>What I noticed first upon walking into the diner, and what I suspect may draw a lot of visitors in, is the over the top retro interior. The 1950’s styling is like a brighter, redder, version of <a href="/diners/remedy-diner">Remedy's</a> interior, with lots of of shiny chrome accents ands art deco flourishes. But the diner has a little bit of a modern twist. You won’t find any of those beautiful leather booths like at Remedy, The Diner uses chunky faux-red-leather booths that fit the atmosphere perfectly. That’s unfortunate though because I found the atmosphere in The Diner to be confused and dull. It was confused between being a no frills diner from the 1950s and a trendy brunch spot that could compete with a competitive neighborhood like the Meatpacking District. I would like the interior more if it just went for grittier, more old school vibe. The service was lousy too, I wouldn’t say it was bad, but bad enough to make me feel unwanted and uncomfortable...which is bad. </p>
                    </div>
                    <div class="section-blockquote right">
                        <h1>I was ready to hate this place, and then the food came.</h1>
                </div>
                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-image full">
                        <img src='images/interior-wide.jpg'>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote left yellow">
                        <h1><span>Both the pancakes and french toast were simple and beautiful, both topped with strawberries and powdered sugar.</span></h1>
                    </div>
                    <div class="section-text">
                        <p>I visited at around 10:30am on a Saturday and I was pumped to try the breakfast here after hearing recommendations. I was feeling a little let down by the overall feeling of the place, so I wasn’t expecting anything special from the kitchen. The breakfast was incredible. Both the pancakes and french toast were simple and beautiful, both topped with strawberries and powdered sugar. The dishes were so simple and pretty. I was even more surprised when everything tasted just as good as it looked, if not better.</p>
                    </div>
                    <div class="section-image full">
                        <img src='images/pancakes-wide.jpg'>
                    </div>
                    <div class="section-text alone">
                        <p>Both dishes reminded me of a toned down version of what you find at <a href="/diners/la-bonbonniere/">La Bonbonniere</a>, which means the primary flavor is butter and grease, but at The Diner the balance is much, much better. That comfort-food flavor combined with the sweet strawberries was so, so satisfying. I loved the food here. I enjoyed the meal so much that it makes it really hard to organize my thoughts about this place. I honestly didn’t really enjoy being in The Diner, and I usually (obviously) love being in diners.
                        </p>
                    </div>

                    
                    <div class="section-image full">
                        <img src='images/french-toast.jpg'>
                    </div>
                    <div class="section-image full">
                        <img src='images/clock.jpg'>
                    </div>
                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>My suggestion is to check out The Diner, find a seat outside on a nice day, and enjoy the super tasty food. You’ll miss out on the diner experience by sitting outside, but that’s something that The Diner does very well anyway.</h1>
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
