/**
 * Restrict special characters from forms fields with special CSS class and disallow pasting
 * Apply the class "wpf-char-restrict" to the field to enable.
 *
 * @link https://wpforms.com/developers/how-to-restrict-special-characters-from-a-form-field/
 */
  
function wpf_dev_char_restrict() {
?>
  
<script type="text/javascript">
      
    jQuery(function($){
 
        //Prevent any special characters in form fields with this CSS class name
        $( '.wpf-char-restrict' ).on( 'keypress', function(e){
              
            var regex = new RegExp("^[0-9a-zA-Z \b]+$");
            var key = String.fromCharCode(!event.charCode ? event.which: event.charCode);
            if (!regex.test(key)) 
                {
                    alert ( "Special characters are not allowed in this field" ); // Put any message here
                    event.preventDefault();
                    return false;
                } 
        });
          
        //Prevent any paste features in form fields with this CSS class name
        $( '.wpf-char-restrict' ).bind( 'copy paste', function (e) {
            var regex = new RegExp( "@" );
              
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
              
            if (!regex.test(key)) {
                alert ( "Pasting feature has been disabled for this field" ); // Put any message here
                e.preventDefault();
                return false;
            }
        });
          
    });
  
</script>
  
<?php
}
add_action( 'wpforms_wp_footer_end', 'wpf_dev_char_restrict', 10 );
