define(
	['jquery', 'underscore', 'backbone', 'sticky', 'jcarousel', 'mousewheel', 'easing'], 
	function($, _, Backbone, sticky, jCarouselLite, mousewheel, easing) {

		var articleView = Backbone.View.extend({

			initialize: function() {
				console.log('article view initialized');
				this.getSticky();
			},

			getSticky: function() {
				$(".ads_160").sticky({topSpacing:10, bottomSpacing: 120});
				$(".related_articles").sticky({topSpacing:0, bottomSpacing: 120});
				$("#info-share").sticky({bottomSpacing: 120, wrapperClassName:"info-share-wrap"});
				$(".related_articles_items").jCarouselLite({
					mouseWheel: true,
					vertical: true
				})
			}
		});

		return articleView;
	});