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
		var target = $(e.target);
		var closest = target.closest('.page_item');
		if (closest.hasClass('page_item_has_children')) {
			e.preventDefault();
			var link = closest.children('ul.children').children('li:first-child').children('a').attr('href');
			window.location.href = link;


		}
	})

	$('.main-nav #primary-menu > li').hover(function () {
			var offset = $(this).offset();
			leftOffset = offset.left;
			var child = $(this).children('ul.sub-menu');
			console.log(offset.left);
			child.css('left', leftOffset);
			child.addClass('hover');
		},	function () {
			$(this).children('ul.sub-menu').removeClass('hover');
		}
	);




	$('.back-gallery-btn').on('click', function (e) {
		e.preventDefault();
		location.href = 'http://davebrook-school.u1176.indigo.elastictech.org/media/photo-gallery/';
	})




})
