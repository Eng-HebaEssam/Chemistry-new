(function($) {
	"use strict";
	var fullHeight = function() {
		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});
	};
	fullHeight();
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
	//corses_content
	var i =1;
	var index = $('.index').val();
	function check() {
		if (i==1){
			$('#previous').addClass('disabled_prev').attr("disabled", true);
			$('#next').removeClass('disabled_prev').attr("disabled", false);
		} else if (i == index){
			$('#next').addClass('disabled_prev').attr("disabled", true);
			$('#previous').removeClass('disabled_prev').attr("disabled", false);
		}
		else{
			$('#previous').removeClass('disabled_prev').attr("disabled", false);
			$('#next').removeClass('disabled_prev').attr("disabled", false);
		}
	}
	check();
	$('#next').on('click', function() {
		var find = $( "."+i );
		$( ".content" ).find( find ).hide();
		$(".components ."+i).removeClass('active');
		i=$( ".content" ).find( find ).next('div').data('index');
		var find_2 = $( "."+i );
		$( ".content" ).find( find_2 ).show();
		$(".components ."+i).addClass('active');
		check();
	});
	$('#previous').on('click', function() {
		var find = $( "."+i );
		$( ".content" ).find( find ).hide();
		$(".components ."+i).removeClass('active');
		i=$( ".content" ).find( find ).prev('div').data('index');
		var find_2 = $( "."+i );
		$( ".content" ).find( find_2 ).show();
		$(".components ."+i).addClass('active');
		check();
	});
	$(".components li ").on('click', function() {
		$(this).addClass('active').siblings().removeClass('active');
		var main = $(this).children().val();
		var find = $( "."+main );
		var find_2 = $( "."+i );
		$( ".content" ).find( find_2 ).hide();
		$( ".content" ).find( find ).show();
		i=parseInt(main);
		check();
	});
})(jQuery);
