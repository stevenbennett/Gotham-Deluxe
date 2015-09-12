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

<title>Waverly | Gotham Deluxe</title>

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
                    <img src='images/interior1.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/server1.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/menu2.jpg'>
                </div>
            </div>
        </div>        

        <div class="section">
            <div class="section-interior">
                <div class="section-text alone">
                    <p>Waverly doesn’t feel quite like other diners. It’s definitely not like any of the twenty-four hour diners I’ve visted. Inside, the space between the wood paneled walls is filled with leather booths and polished chrome. The booths themselves are really cool and even the tables are some sort of stone or faux-stone material. The overall effect of the interior is best described as…sparkly.</p>
                    <p>My reasoning for thinking this place is a little strange starts at the menu. There you'll find all of the diner staples like pancakes and burgers, but also a few things you wouldn’t expect like Pastichio and Fried Calamari. Prices range from $6.05 for eggs to $36.95 for Stuffed Lobster Tails. For a regular diner this is only a little surprising, but for a 24 hour diner it's borderline silly.</p>
                </div>

                <div class="section-image full">
                <img src='images/booth-far2.jpg'>
                </div>
                </div>
                </div>
                <div class="section">
                    <div class="section-interior">
                    <div class="section-blockquote large">
                        <h1>Waverly is one of the cleanest and strangest diners I’ve ever been to.</h1>
                    </div>
                </div>
                </div>
                <div class="section">
                    <div class="section-interior">
                <div class="section-image reduced">
                    <img src='images/gyro1.jpg'>
                    <div class="section-image-caption">
                        <p>I took the paper off before taking this photo, but they serve the gyro wrapped in deli paper. Why do they do that?</p>
                    </div>
                </div>
                <div class="section-text alone">
                    <p>I thought a Gyro was a reasonable thing to order at a Greek inspired place like this. It’s something that you can find at some but not all diners, and I thought it was a good balance of typical diner food and Waverly’s Greek offerings. I was pretty disappointed. The Gyro came wrapped in paper like you’d get at a deli and it tasted bland and was too dry no matter what I dipped it in. The fries didn’t really help either, and I added a memorable amount of salt and ketchup to them. That was a pretty big bummer, Gyro seemed like a good choice at the time.</p>
                </div>


            </div>
        </div>
        <div class="section">
            <div class="section-interior">
                <div class="section-image half">
                    <img src='images/milkshake.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/booth2.jpg'>
                </div>

                <div class="section-image full">
                    <img src='images/server2.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/root-beer-float.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/subway.jpg'>
                </div>
            </div>
        </div> 

        <div class="section">
            <div class="section-interior">
            <div class="section-blockquote left">
                <h1>Prices range from $6.05 for eggs to $36.95 for two stuffed lobster tails</h1>
            </div>
                <div class="section-text">
                    <p>It’s possible that Waverly is known for the more elaborate dishes on the menu like the Veal Cutlet Parmigiana, Broiled Filet of Lemon Sole, or the Romanian Steak with Stuffed Shrimp and Scallops. But all of those are over $20 and not the kind of the kind of thing I’m looking for at a diner. It’s really confusing to find these things at a twenty-four hour place, but I think it's also exactly why I like diners so much. I can come into Waverly at 3 am, sit down at the bar and order Pork Souvlaki and a strawberry milkshake. That makes Waverly a pretty special place.</p>
                    <p>One thing I loved herey was the staff. They were actively friendly but not too friendly. They're different from a place like <a href="/diners/cup-and-saucer">Cup and Saucer</a> where everyone you interact with is genuinely friendly, but they're not going to approach or extend your conversation beyond what's necessary. At Waverly the servers are more actively friendly, and they'll approach you and joke with you when they can. They're very thoughtful and they know when to hang around and when to leave you alone. There's also a tangible camaraderie between the staff that contributes to the overall positive atmosphere.</p>
                </div>
            </div>
        </div> 

        <div class="section">
            <div class="section-interior">
                <div class="section-image full">
                    <img src='images/sign.jpg'>
                </div>
            </div>
        </div>
        <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>Waverly is a really high quality diner, and it seems they maintain that quality 24/7. This alone almost earned it four stars, but my meal was very underwhelming. Despite this, I think it has a lot of potential, and one mediocre meal isn't going to stop me from going back to Waverly.</h1>
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
