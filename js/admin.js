// show message

function showMessage(message)
{
   jQuery("#ms_dialog").show();
}
// Save settings for Global.
function ms_click_credit_link()
{



       var state = jQuery('#ms_author_linking').attr('checked') ? '1' : '0';
        var dataLink = {
            action  : 'ms_set_support_link',
            state   : state
        };

        jQuery.post(ajax_object.ajax_url, dataLink, function(respond) {
            if(jQuery('#ms_author_linking').attr('checked')){
                jQuery("#ms_support_title_1").hide();
                jQuery("#ms_support_title_2").show();
                jQuery("#ms_support_title_3").hide();
            }
            else {
                jQuery('#ms-notice-support-view').show();
                jQuery("#ms_support_title_1").show();
                jQuery("#ms_support_title_2").hide();
                jQuery("#ms_support_title_3").hide();
            }
        });

}
