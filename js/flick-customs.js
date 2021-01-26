jQuery(function($){

    // element argument can be a selector string
    //   for an individual element
    var flkty = new Flickity( '.main-carousel.show', {
       // options
      cellAlign: 'right',
      contain: true,
      groupCells: 2,
      draggable: true,
      pageDots: false,
      prevNextButtons: false,
      setGallerySize: true,
      fade: true,
      autoPlay: 3000
    });
    // external js: flickity.pkgd.js

// var $carousel = $('.main-carousel').flickity();

//$('.button-group').on( 'click', '.buttone', function() {
//  var index = $(this).index();
//  console.log( index );
//  $carousel.flickity( 'select', index );
//});
$('.button-group .buttone').on( 'click', function() {
  var indexy = $(this).index();
  let last = indexy.length;
  console.log( indexy + " out of " + last );
  if ( indexy === 3 ) { // Scott de la Fuente
      $carousel.flickity( 'select', 0 );
  };
  if ( indexy === 5 ) { // Andrew Hayward
      $carousel.flickity( 'select', 1 );
  }
  if ( indexy === 10 ) { // Sean Annal
      $carousel.flickity( 'select', 2 );
  }
  if ( indexy === 15 ) { // Paul Donovan
      $carousel.flickity( 'select', 5 );
  }
  if ( indexy === 17 ) { // Paul Carrol
      $carousel.flickity( 'select', 5 );
  }
  if ( indexy === 22 ) { // Drew Botterman
      $carousel.flickity( 'select', 10 );
  }
  if ( indexy === 24 ) { // Haytham
      $carousel.flickity( 'select', 12 );
  }
  if ( indexy === 29 ) { // Yiksum Lau
      $carousel.flickity( 'select', 14 );
  }
  if ( indexy === 34 ) { // Karen Bedford
      $carousel.flickity( 'select', 16 );
  }
  if ( indexy === 39 ) { // Zoe Botterman;
      $carousel.flickity( 'select', 18 );
  }
  if ( indexy === 44 ) { // Belal Uddin;
      $carousel.flickity( 'select', 20 );
  }
  if ( indexy === 49 ) { // Paolo Cantiello;
      $carousel.flickity( 'select', 22 );
  }
  if ( indexy === 54 ) { // Barry Twohig;
      $carousel.flickity( 'select', 24 );
  }
  else {
      $carousel.flickity( 'select', last );
  }
  
});
//$(".andrew").click(function(){
//    var andbio = $(".andrew-bio").html();
//    $(".coll-2").empty();
//    $(".coll-2").prepend(andbio);
//});
//$(".scott").click(function(){
//    var scobio = $(".scott-bio").html();
//    $(".coll-2").empty();
//    $(".coll-2").prepend(scobio);
//});
//$(".pauld").click(function(){
//    var pauldbio = $(".pauld-bio").html();
//    $(".coll-2").empty();
//    $(".coll-2").prepend(pauldbio);
//});

});