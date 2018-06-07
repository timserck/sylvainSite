( function() {

    console.log("test");

    var menuIcon  = document.getElementsByClassName("icon-mobile")[0];
    var nav  = document.getElementById("nav");
    menuIcon.addEventListener('click', function(e) {
        e.preventDefault();
        nav.classList.toggle('active');
        return false;
    });



    jQuery(function($){
        $('#filter').submit(function(){
            var filter = $('#filter');
            $.ajax({
                url:filter.attr('action'),
                data:filter.serialize(), // form data
                type:filter.attr('method'), // POST
                beforeSend:function(xhr){
                    filter.find('button').text('Applying Filters...');          },
                success:function(data){
                    filter.find('button').text('Apply filters');                $('#response').html(data);
                }
            });
            return false;
        });
    });







} )(jQuery);