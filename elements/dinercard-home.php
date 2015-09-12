<script type="text/html" id="diner">

            <% var name = data.info.name.split(' ').join('-'); %>
            <% var diner = name.toLowerCase(); %>
            
            <div class="dinercard-container">
                <a href="/diners/<%= diner %>">
                    <div class="dinercard-info-inner-left">
                        <img src='/diners/<%= diner %>/images/<%= diner %>.jpg'>
                    </div>
                    <div class="dinercard-info-inner-right">
                        <div class="dinercard-info-inner-right-top">
                        <img src='/diners/<%= diner %>/images/<%= diner %>-cover-interior.jpg'>
                        </div> 
                        <div class="dinercard-info-inner-right-bottom">
                        <h2><%= data.info.neighborhood %></h2>
                        <h1><%= data.info.name %></h1>
                        <span>—</span>
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

