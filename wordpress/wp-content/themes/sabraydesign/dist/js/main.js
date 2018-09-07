(function($){
    var special = "nice!";
 })(jQuery);
 
 alert(special); // would be undefined

$( document ).ready(function() {

    $('.archive_cont').masonry({
        // options...
        itemSelector: '.archive_item',
        columnWidth: 200
      });

});
