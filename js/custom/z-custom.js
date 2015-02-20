// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
// $(document).foundation(); 

//	=========
//	REPAINT FUNCTION AFTER RESIZE
//	=========

$.fn.redraw = function(){
  $(this).each(function(){
    var redraw = this.offsetHeight;
  });
};

//	=========
//	INIT JQUERY CUSTOM FUNCTIONS
//	=========

	jQuery(document).ready(function() {

//	=========
//	FLOATING MENU POSITION FOLOWING THE GRID
//	=========

	if ( $(window).width()>1025 ) {
	var gap = ($(window).width()-1025)/2;
	$( "#floating" ).offset({ left: gap }).fadeIn("slow");
	}
	});

	jQuery(window).resize(function() {
	if ( $(window).width()<1025 ) {
	$( "#floating" ).fadeOut(1);
	}
	else {
	$( "#floating" ).fadeIn("slow");
	var gap = ($(window).width()-1025)/2;
	$( "#floating" ).offset({ left: gap }).fadeIn("slow");
	}
	});

//	=========
//	FALL BACK VH FOR THE HOME PAGE
//	=========

	jQuery(document).ready(function() {
	$( "#scene" ).height(jQuery(window).height());
	$( "#scene" ).fadeIn("slow");
	$( "li" ).redraw();
	$( "img" ).redraw();
	});
	jQuery(window).resize(function() {
	$( "#scene" ).height(jQuery(window).height());
	});


//	=========
//	SLIDE DOWN EFFECT PARRALLAX HEADER
//	=========
	
	jQuery(document).ready(function() {
	$( "#ParralaxHeader" ).slideDown( "slow","swing", function() {
							     // Init Skrollr
								 var s = skrollr.init({
									 render: function(data) {
										 //Debugging - Log the current scroll position.
										 //console.log(data.curTop);
										 					}
										 			  });
										 			  
									skrollr.init({forceHeight: false});
								                  });
		
	$('.left-off-canvas-toggle ').click( function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
    
 
		});	
	});
		

//	=========
//	SLIDE BARS FOR REVIEWS
//	=========


jQuery(document).ready(function(){
	
    jQuery('.SSscroll').slimScroll({
        height: '250px',
        color: 'black',
        allowPageScroll: true
    
    });
    
    
});


//	=========
//	ISOTOPE
//	=========


jQuery( function() {
  // init Isotope
  var $container = $('#reviews').isotope({
    itemSelector: '.review',
    getSortData: {
    vintage: '.sort-vintage', // text from querySelector
    author: '.sort-author', // text from querySelector
    wine: '.sort-wine', // text from querySelector
    rating: '.sort-rating', // text from querySelector
        },
    sortBy :  [ 'vintage', 'wine','rating' ],
    sortAscending: false
       
  });

  // store filter for each group
  var filters = {};

  $('#filters').on( 'click', '.filter', function() {
    var $this = $(this);
    // get group key
    var $buttonGroup = $this.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = '';
    for ( var prop in filters ) {
      filterValue += filters[ prop ];
    }
    // set filter for Isotope
    $container.isotope({ filter: filterValue });
  });
  // bind sort button click
  $('#sorts').on( 'click', 'button', function() {
    var sortValue = $(this).attr('data-sort-value');
    $container.isotope({ sortBy: sortValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', '.filter', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});

//	=========
//	ISOTOPE FILTERING BY URL
//	=========


function getParameterByName(name)
{
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.search);
  if(results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(function() {

    var filterFromQuerystring = getParameterByName('filter');
    $('button[data-filter=".' + filterFromQuerystring  + '"]').click();
});

////

 
