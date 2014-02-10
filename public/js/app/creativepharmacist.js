var CreativePharmacist = function() {
  return {
    'EventManager': {
        subscribe: function(event, fn) {
            $(this).bind(event, fn);
        },
        unsubscribe: function(event, fn) {
            $(this).unbind(event, fn);
        },
        publish: function(event) {
            $(this).trigger(event);
        }
    },

    'init': function() {

    }// end init method

  } // return object from closure
}(); // End Closure


$(document).ready(function() {
  CreativePharmacist.init();  
});

