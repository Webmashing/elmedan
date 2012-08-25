define(['jquery','underscore','backbone'], function($, _, Backbone) {
    
    var Router = Backbone.Router.extend({
        initialize: function() {
            console.log("new Router initialized");
        },
        routes: {
            '': 'home'
        }
    });
    
    var initialize = function() {
        var router = new Router();
        Backbone.history.start();
    }
    
    return { initialize: initialize };
});