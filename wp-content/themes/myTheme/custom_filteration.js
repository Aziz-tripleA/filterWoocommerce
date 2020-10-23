jQuery(document).ready(function($) {

    //var product_meta = Array();
    $("select").on('change',function(){
    var city = $(this).val();
     var data = {

            action: 'woocommerce_ajax_filter_products',

            city: city,

        };

    $.ajax({

            type: 'post',

            url: ajax_object.ajax_url,
            //`dataType: 'html',
            data: data,

            beforeSend: function (response) {

            },

            complete: function (response) {    
            }, 

            success: function (response) { 
                jQuery('.products').html(response);
                //console.log(response);
               /*  jQuery('#listProducts').html(response); */
            }, 
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
                console.log(errorThrown);
                console.log(jqXHR);
            }

        }); 

    });

   


});