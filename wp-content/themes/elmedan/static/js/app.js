// application module
//---------------
define(['jquery', 'sticky', 'mousewheel', 'jcarousel', 'easing'], function($, sticky, mousewheel, jCarouselLite){
    
    var initialize = function() {
    			// set sticky to the ads
				$(".ads_160").sticky({topSpacing:10, bottomSpacing: 120});
				// set sticky to the related articles
				$(".related_articles").sticky({topSpacing:0, bottomSpacing: 120});
				// set sticky to the share bare of article
				$("#info-share").sticky({bottomSpacing: 120, wrapperClassName:"info-share-wrap"});
				// set carousel to the related articles
				$(".related_articles_items").jCarouselLite({
					mouseWheel: true,
					vertical: true,
					circular: false
				});

				// $(".top_bar").click(function(){
				// 	var test = $("ul").find("li[data-item=9]").position();
				// 	$('.related_articles_items ul').animate({top:-test.top+200}, 2000);
				// });
    }

    return { initialize: initialize }

});