<!DOCTYPE html>
<script type="text/html" id="scorecard">
<div class="score-background"></div>
<div class="section-interior">
    <div class="section-scorecard">
        <div class="section-scorecard-inner">
            <div class="score-comment-holder">
                <div class="score-comments">
                    <span><h2>Good</h2></span><br>
                    <ul>
                        <% _.each(data.review.good, function(w) { %>
                        <li><%= w %></li><br>
                    <% }) %>
                    </ul>
                </div>
                <div class="score-comments">
                    <span><h2>Not Good</h2></span><br>
                    <ul>
                        <% _.each(data.review.not_good, function(w) { %>
                        <li><%= w %></li><br>
                    <% }) %>
                    </ul>
                </div>
            </div>
        <div class="rating">
        
            <h1><span><%= data.review.rating %></span></h1>
            <h2><%= data.review.rating_text %></h2>
        
        </div>

        </div>
    </div>
</div>


</script>

<script>
    $(window).load(function(){
            var loc = window.location.pathname;
            $.get('info.json', function(data){
            var template = _.template($('#scorecard').html(), {variable: 'data'});
            var html = template(data);
            $('#score').append(html);

        })                   
    });
</script>
