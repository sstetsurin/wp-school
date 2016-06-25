$( ".sitemap-button" ).click(function (e) {
  e.preventDefault();

  if ( $( ".sitemap" ).is( ":hidden" ) ) {
    $( ".sitemap" ).show();
    $(window).scrollTo('.sitemap');
  } else {
    $( ".sitemap" ).hide();
  }
});
// $(document).ready(function () {
// 	$('.sidebar-menu .page_item_has_children').each(function () {
// 	if ($(this).not('.current_page_ancestor')) {
// 		console.log('msg')
// 		$(this).find('ul.children').collapse('hide');
// 	} else $(this).find('ul.children').collapse('toggle');
// });
// })

//Collapse for sedebar submenu
// $('.sidebar-menu .page_item_has_children').click(function (e) {
// 	e.preventDefault();
// 	if ($(this).find('ul.children').hasClass('in')) {
// 		$(this).find('ul.children').collapse('hide')
// 	} else ($(this).find('ul.children').collapse('show'))
// })
$('.sidebar-menu .page_item_has_children');
console.log($(".page_item_has_children"))