define(['jquery','underscore','backbone', 'views/article'], function($, _, Backbone, articleView) {
    
    var Router = Backbone.Router.extend({
        initialize: function() {
            console.log("new Router initialized");
            if(page_type==="article") { this.article(); };
        },

        article: function() {
            var article_view = new articleView();
        }
    });
    
    var initialize = function() {
        var router = new Router();
        Backbone.history.start();
    }
    
    return { initialize: initialize };
});