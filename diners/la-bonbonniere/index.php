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
                    <div class="section-image full">
                        <img src='images/outside.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/menu-coffee.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/door2.jpg'>
                    </div>

                    <div class="section-image full">
                        <img src='images/inside.jpg'>
                    </div>
                </div>
            </div>
     


            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote left">
                        <h1>A little, eclectic diner that’s unapologetically not pretty.</h1>
                     </div>
                    <div class="section-text">
                        <p>The service, for example, is perfectly fine for a brunch place, but below my expectations for a diner, and the staff is completely neutral in their friendliness, not unfriendly at all, but even less friendly than <a href="/diners/joe-junior">Joe Junior</a>. I’m actually not sure if the staff, including our server, spoke to us at all while we were there, and even though our food came out fast it wasn’t diner-fast, and they didn’t refill our coffee or water until the very end of our meal. I got the general impression from the staff that we were inconveniencing them. Also, this place is popular so if you come in on the weekend don’t be surprised if you feel rushed to give up your seat.</p>
                    </div>
                    <div class="section-image reduced">
                        <img src='images/french-toast.jpg'>
                        <div class="section-image-caption">
                            <p>Greasy, buttery french toast.</p>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-image full">
                        <img src='images/window.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/food.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/wall3.jpg'>
                    </div>
                    
                </div>
            </div>

            <div class="section">
                <div class="section-interior">
                    
                    <div class="section-text alone">
                        <p>Even though the staff seems a little apathetic, the atmosphere is otherwise great. La Bonbonniere is in a fantastic neighborhood, one of the best in the city for wandering around on the weekend. This is a grungy (in a good way) little diner that embraces it’s messiness in the middle its carefully groomed surroundings. The interior is bright, cluttered with newspaper and magazine clippings, and smells like breakfast.</p>
                    </div>
                <div class="section-blockquote right yellow">
                        <h1><span>I got the general impression from the staff that we were inconveniencing them.</span></h1>
                     </div>
                     <div class="section-image reduced">
                            <img src='images/bike.jpg'>
                            <div class="section-image-caption">
                             <p>If you go to La Bonbonniere, try your best to explore the neighborhood before and after your visit. The West Village really is one of the best.</p>
                            </div>
                    </div>

                    <div class="section-text alone">
                        <p>Breakfast dominates the menu here and they take it seriously. The coffee is fine, and I was able to try the french toast and pancakes plus bacon and eggs. Everything is soaked in butter and grease so if that’s the kind of thing you like then you’re probably going to love it here. I liked the french toast but I think they rely a little too much on the greasy/buttery flavor and I didn’t get a sense for what the food underneath actually tasted like.</p>
                    </div>

        

                    <div class="section-image half">
                        <img src='images/wall1.jpg'>
                    </div>
                    <div class="section-image half">
                        <img src='images/server.jpg'>
                    </div>
                    <div class="section-image full">
                        <img src='images/group.jpg'>
                    </div>
                </div>
            </div> 

            <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>I can see why people like La Bonbonniere. It’s hip, pretty affordable, and completely unique, but it’s not friendly, accommodating, or delicious enough to stand out as a favorite.</h1>
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
