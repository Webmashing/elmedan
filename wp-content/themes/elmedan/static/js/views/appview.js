// App view module
//------------------------

define(['jquery', 'underscore', 'backbone', 'libs/easing'], function($, _, Backbone, easing){
    
    var Appview = Backbone.View.extend({
        
       el: $("body"),
       intervalId: "",
       current: 1,
       
       initialize: function(){
        _.bindAll(this, 'iterate', 'display');
        this.display($("#featured-list li:nth-child(1)"));
        this.intervalId = setInterval(this.iterate, 3000);
       },
       
       events: {
        "click #featured-list li" : "clicked"
       },
       
       clicked: function(ev) {
        this.display($(ev.currentTarget));
        clearTimeout(this.intervalId);
        ev.preventDefault();
       },
       
       iterate: function() {
        var that = this;
        var i = parseInt(that.current + 1);
        var lis = $("#featured-list").children('li').size();
        if(i>lis) {
            that.current = 0;
            i = 1;
        }
        that.display($("#featured-list li:nth-child("+i+")"));
        that.current++;
       },
       
       display: function(elm) {
        var that = this;
        var $this = elm;
        var id = $this.find('a:first').attr('href');
        // hide all elements
        $("#featured").find('.principal').css({'display':'none'});
        $("#featured").find('.principal img').css({'opacity':0});
        // display the selected one
        $(id).css({'display':'block'});
        console.log(id);
        // slide out/in title
        $(id).find('h2:first').animate({'right':'-345px'}, 500, 'easeOutCirc', function(){
            $(this).animate({'right':'0px'}, 400, 'easeInOutQuad');
            });
        // slide out/in description
        $(id).find('p:first').animate({'marginTop':'-80px'}, 500, 'easeOutCirc', function(){
            $(this).animate({'margin':'0px'}, 400, 'easeInOutQuad');
            });
        $(id).find('img:first').animate({'opacity':1}, 700);
       }

    });

    var initialize = function() {

        var appview = new Appview();

    };

    return { initialize: initialize }

    });