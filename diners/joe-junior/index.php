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

<title>Joe Junior | Gotham Deluxe</title>

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
                        <img src='images/exterior.jpg'>
                </div>
            </div>
        </div>  
        <div class="section">
            <div class="section-interior">
                <div class="section-text alone">
                    <p>Joe Junior is an classic American Diner with a couple of twists. There’s a nautically themed clock hanging from wood and mirror clad walls, a (working) vintage register at the corner of the bar, cheesecakes in the fridge, and kitchen made seemingly exclusively of stainless steel. Most of the action happens around the bar, but there are two booths tucked perfectly into the windows near the entrance that seem like the ideal place to be.</p>
                </div>
                <div class="section-image reduced">
                    <img src='images/waffle.jpg'>
                    <div class="section-image-caption">
                        <p>I visited during breakfast so rather than getting the legendary burger I ordered the much less legendary belgian waffle. It tasted like an ordinary belgian waffle. I don't think they're boasting about having the best one of these, but they certainly didn't mess it up.</p>
                    </div>
                </div>
            </div>
        </div> 

        <div class="section">
            <div class="section-interior">
                <div class="section-image full">
                    <img src='images/server.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/coffee.jpg'>
                </div>
                <div class="section-image half">
                    <img src='images/bar.jpg'>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-interior">
                
                <div class="section-text alone">
                    <p>Inside there's a timeless, quirky vibe, and while the staff is courteous and competent, I wouldn't describe them as friendly. We would have been happier sitting at the bar if the servers had been a little bit happier about taking our order. He was nice enough though, and when I asked if I could have whipped cream on my waffle his response was "Of course." which is the ideal response to most requests when you're in a diner. "Mind if I sit at the booth?" "Of course!", "Can you make this without tomatoes?" "Of course!", "Could I have a box for this?" "Of course!"</p>
                </div>
                <div class="section-blockquote large">
                        <h1>When I asked if I could have whipped cream on my waffle his response was "Of course." which is the ideal response to most requests when you're in a diner.</h1>
                </div>
                <div class="section-text alone">
                    <p>Overall Joe Junior is a nice, average diner, it’s a place you could take someone if you wanted to show them what a classic (but not 1950’s classic) American diner is all about. It definitely has more of a classic feel than a place like <a href="/diners/waverly">Waverly</a>. I do wish it was located a few blocks southeast in the Lower East Side, and also the staff could be friendlier, but if the burger is as good as they say then I could see Joe Junior being an easy recommendation. Without having tried the burger I don’t see why someone would go out of their way for a seat at Joe Junior, but I can say that if you’re in the neighborhood Joe Junior seems to provide a reliable diner fix.</p>
                </div>
                                <div class="section-image reduced">
                    <img src='images/bite.jpg'>
                </div>
            </div>
        </div> 


    
        <div class="section">
            <div class="section-interior">
                <div class="section-image full">
                <img src='images/bill.jpg'>
                </div>
            </div>
        </div>

        <div class="section">
                <div class="section-interior">
                    <div class="section-blockquote large summary">
                        <h1>This score could increase to four stars if the burger really is special, but it would have to be really something to earn Joe Junior a fifth star.</h1>
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
