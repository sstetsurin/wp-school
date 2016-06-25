$(document).ready(function () {
	$('.sidebar-menu .page_item_has_children ul.children').hide();


	$('.sidebar-menu .nav .current_page_ancestor').children('ul.children').show();


	$( ".sitemap-button" ).click(function (e) {
	  e.preventDefault();

	  if ( $( ".sitemap" ).is( ":hidden" ) ) {
	    $( ".sitemap" ).show();
	    $(window).scrollTo('.sitemap');
	  } else {
	    $( ".sitemap" ).hide();
	  }
	});

	$('.sidebar-menu').on('click', function (e) {
		console.log(e.target)
		var target = $(e.target);
		if (target.closest('.page_item').hasClass('page_item_has_children')) {
			e.preventDefault();
			target.closest('.page_item').children('ul.children').show();

		}
	})
})
