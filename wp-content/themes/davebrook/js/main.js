// $( ".sitemap-button" ).click(function() {
//   $( ".sitemap" ).slideDown( "slow", function() {
//     // Animation complete.
//   });
// });

$( ".sitemap-button" ).click(function (e) {
  e.preventDefault();

  if ( $( ".sitemap" ).is( ":hidden" ) ) {
    $( ".sitemap" ).show();
    $(window).scrollTo('.sitemap');
  } else {
    $( ".sitemap" ).hide();
  }
});