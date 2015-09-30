/* Portfolio 2015
 *
 * Script uses for adding interactivity for my portfolui
 *
 * Started @ 23/09/2015
 */

( function( $ ) {
    "user strict";

    // Hidden / Show menu when scroll
    var previousScroll = 0;

    $( window ).scroll( function()
    {
        var currentScroll = $( this ).scrollTop();

        if ( currentScroll > 0 && currentScroll < $( document ).height() - $( window ).height() )
        {

            if( currentScroll > previousScroll )
            {
                window.setTimeout( hideNav, 250 );
            }
            else
            {
                window.setTimeout( showNav, 250 );
            }

            previousScroll = currentScroll;
      }

    } );

    function hideNav()
    {
      $( ".header" ).removeClass( "header--visible" ).addClass( "header--hidden" );
      // Hide my arrow when scroll
      $( ".cover__arrow" ).addClass( "cover__arrow--hidden" );
    }

    function showNav()
    {
      $( ".header" ).removeClass( "header--hidden" ).addClass( "header--visible" );
    }

} ) (jQuery);
