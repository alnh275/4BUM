( function( $ ) {
    var wpcf7Elm = document.querySelector( '.wpcf7-form' );
  
  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    alert( "Fire!" );
    $(".step-1").hide();
    $(".step-2").show();
  }, false );
 
 
}( jQuery ) );