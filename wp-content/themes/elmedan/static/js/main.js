// main page 
//------------------

require.config({
  
        paths: {
          jquery: 'libs/jquery.min',
          underscore: 'libs/underscore',
          backbone: 'libs/backbone',
          text: 'libs/text'
        }
  
    });

require(['app'], function(App) {
   
        // initialize the application on load
        App.initialize();
        console.log(App);
   
    });