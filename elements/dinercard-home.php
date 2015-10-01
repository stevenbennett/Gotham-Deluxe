<script type="text/html" id="diner">

            <% var name = data.info.name.split(' ').join('-'); %>
            <% var diner = name.toLowerCase(); %>
            
            <div class="dinercard-container">
                <a href="/diners/<%= diner %>">
                    <div class="dinercard-info-inner" style="background-image: url('/diners/<%= diner %>/images/<%= diner %>.jpg');">

                        <div class="dinercard-info-inner-title">
                        <h1><%= data.info.name %></h1>
                        <p><%= data.info.blurb %></p>
                        </div>
                    </div>  
                </a>       
            </div>
</script>

<script>

    $(document).ready(function(){
            var obj = <?php echo json_encode($dinerlist); ?>;
             _.each(obj, function(value) { 
            $.get('/diners/'+value+'/info.json', function(data){
            var template = _.template($('#diner').html(), {variable: 'data'});
            var html = template(data);
            $('#diners').append(html);
            })  
        })                   
    });
</script>

