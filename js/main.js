$('.post').readmore({
  speed: 75,
  maxHeight: 100
});

//this is a callback switch
$('.post').readmore({
  afterToggle: function(trigger, element, expanded) {
    if(! expanded) { // The "Close" link was clicked
      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
    }
  }
});

