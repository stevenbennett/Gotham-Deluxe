<!DOCTYPE html>
<script type="text/html" id="intro">
<% var name = data.info.name.split(' ').join('-'); %>
            <% var diner = name.toLowerCase(); %>
<div class="info-holder">
<div class="section-detail-content">
<div class="infocard" style="border-color:#<%= data.info.color %>">
    <div class="infocard-info">
    <h1><%= data.info.name %></h1>
            <ul>
                <li>
                    <h2>Location</h2>
                    <p><%= data.info.neighborhood %></p>
                    <p><%= data.info.address %> <br>
                    <%= data.info.city %>, <%= data.info.state %> <%= data.info.zip %><br>
                    </p>
                </li>
                <li>
                <h2>Hours</h2>
                <p><%= data.info.hours %></p>
                </li>
                <li>
                <a target="blank" href="<%= data.info.yelp %>">
                <h3>Yelp<span><img src="/images/arrow-right.svg"></span></h3>
                </a>
                </li>

            </ul>
            </div>
        </div>
    </div>
</div>

<div class="section-text intro">
<div class="inline-image"><img src='images/<%= diner %>.jpg'></div>
    <p>
    <%= data.info.intro %></p>
</div>



</script>
<script>
    $(document).ready(function(){
            var loc = window.location.pathname;
            $.get('info.json', function(data){
            var template = _.template($('#intro').html(), {variable: 'data'});
            var html = template(data);
            $('#intro-section').append(html);
        })                   
    });
</script>