/*image hover*/
$("a img.hover").hover(function(){
		$(this).next('.hover-caption-container').remove();
	    $(this).stop().animate({"opacity": 0.5},300);
	    width = $(this).innerWidth()-5;
	    height = $(this).height();
	    caption = $(this).parent().attr('title');
	    caption = caption.substr(0,35) + "..."
	    if (caption == undefined || caption == ""){
	    	//nothing
	    } else {
		    $(this).after('<div class="hover-caption-container"><div class="hover-caption" style="width:'+width+'px">'+caption+'</div></div>');
		    $caption = $(this).next('.hover-caption-container').find('.hover-caption');
		    //if in elastislide gallery, compensate for border
	    	if ($(this).parents().index($('.elastislide-wrapper')) >= 0) {
	    		$caption.css('left','2px');
	    	}
		    $caption.show("slide", { direction: "down" }, 150);
		}
},function(){
    $(this).stop().animate({"opacity": 1.0},200);
    $caption = $(this).next('.hover-caption-container').find('.hover-caption');
    $caption.hide("slide", { direction: "down" }, 300);
});

/*responsive lightbox helper to smooth out transitions*/
function lightbox_hook(){
	$('.lb-image').load(function(){
		$(this).show();
		$('.heightfix').remove();
		$(this).after('<div class="heightfix" style="height:'+$(this).height()+'px; width:0px; display:none"></div>');
	});
	$('.lb-prev, .lb-next').click(function(){
		var height2 = $('.lb-image').height();
		if (height2 > $('.heightfix').height()) $('.heightfix').height(height2);
		$('.heightfix').css('width','1px').css('display','block');
	});
}

/*ribbons*/
function resize_ribbons(){
	$('.ribbon-left, .ribbon-right').each(function(){
		color = $(this).css('color');
		border_string = 'px solid '+color;
		parent_width = $(this).parent().width();
		ribbon_width = $(this).parent().find('.ribbon').width();
		this_width = ((ribbon_width - parent_width)/2);
		this_height = this_width*0.75;
		if($(this).hasClass('ribbon-left')) $(this).css('border-right', this_width+border_string).css('border-bottom', this_height+'px solid transparent');
		else $(this).css('border-left', this_width+border_string).css('border-bottom', this_height+'px solid transparent');
	});
}

/*center div function*/
jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}

/*Give columns same heights in each row*/
function equalize_divs(){
	if($(window).width() > 767){
		$('.row-fluid .js-same-height, .row .js-same-height').each(function(){
			spans = $(this).find('[class^="span"]');
			spans.removeAttr('style');
			maxHeight = Math.max.apply(
			  Math, spans.map(function() {
			    return $(this).innerHeight();
			}).get());
			spans.css('height',maxHeight);
		});
	} else {
		$('.row-fluid .js-same-height, .row .js-same-height').each(function(){
			spans = $(this).find('[class^="span"]');
			spans.removeAttr('style');
		});
	}
}

function equalize_slider(){
	/*equalize flexslider - make img + text same height to vertically align image*/
	if($(window).width() > 600){
		var height = $('.slider-image').height();
		var height2 = $('.slider-text').height();
		if (height2 > height){
			$('.slider-image').height(height2);
			$('.slider-image').css('line-height', height2+'px');
		} else if (height2 < height){
			$('.slider-image').css('height', 'auto');
			$('.slider-image').css('line-height', 'normal');
		}
	} else {
		$('.slider-image').css('height', 'auto');
		$('.slider-image').css('line-height', 'normal');
	}
}

/*contact form*/
function show_popup_contact(){
	$('.after-close').hide();
	$('.popup-box').fadeIn(200);
	$('.overlay').fadeIn(200);
}
function close_popup_contact(){
	$('.popup-box').hide();
	$('.overlay').hide();
}
$('.slider-image img').load(function(){
	equalize_slider();
});

$(document).ready(function(){
	/*slider*/
	 $('.flexslider').flexslider({
	    animation: "slide"
	 });
	
	/*ribbons*/
	$('.ribbon').after('<div class="ribbon-left"></div><div class="ribbon-right"></div><div class="clearboth"></div>');
	resize_ribbons();
	
	 $('#carousel').elastislide();
	 
	$('.show-popup').click(function(e){
		e.preventDefault();
		show_popup_contact();
		$('.popup-box').center();
	});
	$('.close-popup').click(function(e){
		e.preventDefault();
		close_popup_contact();
	});
	$(window).resize(function(){
		$('.popup-box').center();
		resize_ribbons();
		equalize_divs();
		equalize_slider();
	});
	$('.overlay').click(function(){
		close_popup_contact();
	});
	$('#submit_contact_info').click(function(e){
		e.preventDefault();
		data = [];
		$('#contact_form input, #contact_form textarea').each(function(){
			data.push([$(this).attr('id'), $(this).val()]);
		});
		$.post('send_email.php', {'data':data}, function(response){
			if(response != '0'){
				$('.alert-error').hide();
				$('.alert-error').html(response);
				$('.alert-error').slideDown();
			} else {
				$('.alert-error').hide();
				$('#contact_form').hide();
				$('.alert-success').slideDown();
				$('.after-close').show();
			}
		});
	});
	$('#submit_newsletter').click(function(e){
		e.preventDefault();
		var email = $('#user_email').val();
		$.post('subscribe.php',{'email':email}, function(data){
			if(data != '0'){
				$('.sub_msg').hide();
				$('.sub_msg').html(data);
				$('.sub_msg').slideDown();
				$('#user_email').val('');
			} else {
				$('.sub_msg').hide();
				$('.sub_msg').html('Thank you, your email has been added to our mailing list.');
				$('.sub_msg').slideDown();
				$('#user_email').val('');
			}
		});
	});
});

window.onload = function(){
	equalize_divs();
	equalize_slider();
	lightbox_hook();
};

