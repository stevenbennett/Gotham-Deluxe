<!DOCTYPE html>
<script type="text/html" id="share-buttons">
	<% var diner = data.info.name.split(' ').join('-'); %>
	<div class="section-interior">
		<div class="share end">
			<div class="share-label">
			</div>
			<a class="share-button twitter" href="https://twitter.com/intent/tweet?text=<%= data.info.name %> on @gothamdeluxe&url=http://www.gothamdeluxe.com/diners/<%= diner %>" target="_blank">
			<span><p>Tweet</p></span></a>
			<a class="share-button facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http://www.gothamdeluxe.com/diners/<%= diner %>">
			<span><p>Share</p></span></a>
		</div>
	</div>

</script>

<script>
    $(document).ready(function(){
            var loc = window.location.pathname;
            $.get('info.json', function(data){
            var template = _.template($('#share-buttons').html(), {variable: 'data'});
            var html = template(data);
            $('#share').append(html);
        })                   
    });
</script>