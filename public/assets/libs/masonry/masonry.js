//$('.grid').masonry({
   //options
  //itemSelector: '.grid-item',
  //columnWidth: 200
//});


$(function(){

var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 160
});

$grid.on( 'click', '.grid-item', function() {
  // change size of item via class
  $( this ).toggleClass('grid-item--gigante');
  // trigger layout
  $grid.masonry();
});
 
});



 /*$grid.masonry();
  alert("COUCOU");
  

  var $grid = $('.grid').masonry({
    columnWidth: 80
  });
  // change size of item by toggling gigante class
  $grid.on( 'click', '.grid-item', function() {
    $(this).toggleClass('gigante');
    // trigger layout after item size changes
    $grid.masonry('layout');
  });