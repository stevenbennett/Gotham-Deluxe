<script>
$(document).ready(function(){
    $("#dinerdrawer-button-to-open").click(function(){
        $("#dinerdrawer-button-to-open").toggleClass("opened");
        $("#dinerdrawer").toggleClass("opened");
        $("#main").toggleClass("opened");
        $("#nav").toggleClass("opened");
    });
});
</script>

<script>
$(document).ready(function(){
    $("#close").click(function(){
        $("#dinerdrawer-button-to-open").toggleClass("opened");
        $("#dinerdrawer").toggleClass("opened");
        $("#main").toggleClass("opened");
        $("#nav").toggleClass("opened");
    });
});
</script> 



 	<div class="dinerdrawer-button" id="dinerdrawer-button-to-open">
 		<span id="arrow"><img src="/images/arrow-left.svg"></span>
 		<p>
 			<span>DINERS</span>
<!--  			<span>I</span>
 			<span>N</span>
 			<span>E</span>
 			<span>R</span>
 			<span>S</span> -->
 		</p>
 			
 			<span id="hamburger"><img src="/images/hamburger.svg"></span>
 		
 	</div> 


<?php $dinerlist = array_diff(scandir($path . "/diners",1), array('..', '.', '.DS_Store','error_log')); 
	sort($dinerlist);
?> 

<div class="dinerdrawer" id="dinerdrawer">
<div class="dinerdrawer-interior">
	<div class="close" id="close"></div>
	<a href="/"><h1>GOTHAM DELUXE</h1><a>
	<p>Diners of New York</p>
	</a>
	<ul id="list">

		<script type="text/html" id="drawer-list">

	        <% var name = data.info.name.split(' ').join('-'); %>
	        <% var diner = name.toLowerCase(); %>
	        
	        <a href="/diners/<%= diner %>">
		        <li>
		        	<p><%= data.info.neighborhood %></p>
		        	<h2><span><%= data.info.name %></span></h2>
		        </li>
	        </a>

		</script>
	</ul>
	<div class="dinerdrawer-social">
		<div class="dinerdrawer-social-inner">
			<div class="follow-button">
				<a href="https:/twitter.com" target="blank">
				<img src="/images/twitter-white.svg">
				</a>
			</div>
			<div class="follow-button">
				<a href="https:/instagram.com" target="blank">
				<img src="/images/instagram-white.svg">
				</a>
			</div>
		</div>
	</div>
</div>
</div> 

<script>

    $(document).ready(function(){
            var obj = <?php echo json_encode($dinerlist); ?>;
             _.each(obj, function(value) { 
            $.get('/diners/'+value+'/info.json', function(data){
            var template = _.template($('#drawer-list').html(), {variable: 'data'});
            var html = template(data);
            $('#list').append(html);
            })  
        })                   
    });
</script>


