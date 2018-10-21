$(document).ready(function(){
	// ------------------------------------------------
    //                  M E M B E R
    // ------------------------------------------------
	$('#memberTextDiv1').mouseover(function(){
    	$('#memberImageDiv1 .memberLayer').css({
    		background: 'rgb(71, 71, 71)',
    		opacity: '0.7'
		});
    });
    $('#memberTextDiv1').mouseout(function(){
        $('#memberImageDiv1 .memberLayer').css({
    		background: 'none',
    		opacity: '1',
    		transition: 'all 0.5s ease-in-out'
		});
    });
    $('#memberTextDiv2').mouseover(function(){
    	$('#memberImageDiv2 .memberLayer').css({
    		background: 'rgb(71, 71, 71)',
    		opacity: '0.7'
		});
    });
    $('#memberTextDiv2').mouseout(function(){
        $('#memberImageDiv2 .memberLayer').css({
    		background: 'none',
    		opacity: '1',
    		transition: 'all 0.5s ease-in-out'
		});
    });
    // ------------------------------------------------
    //               N E W S L E T T E R
    // ------------------------------------------------
	$('#newsletterTextDiv1').mouseover(function(){
    	$('#newsletterImageDiv1 .newsletterLayer').css({
    		background: 'rgb(71, 71, 71)',
    		opacity: '0.7'
		});
    });
    $('#newsletterTextDiv1').mouseout(function(){
        $('#newsletterImageDiv1 .newsletterLayer').css({
    		background: 'none',
    		opacity: '1',
    		transition: 'all 0.5s ease-in-out'
		});
    });
    $('#newsletterTextDiv2').mouseover(function(){
    	$('#newsletterImageDiv2 .newsletterLayer').css({
    		background: 'rgb(71, 71, 71)',
    		opacity: '0.7'
		});
    });
    $('#newsletterTextDiv2').mouseout(function(){
        $('#newsletterImageDiv2 .newsletterLayer').css({
    		background: 'none',
    		opacity: '1',
    		transition: 'all 0.5s ease-in-out'
		});
    });
    $('#newsletterTextDiv3').mouseover(function(){
    	$('#newsletterImageDiv3 .newsletterLayer').css({
    		background: 'rgb(71, 71, 71)',
    		opacity: '0.7'
		});
    });
    $('#newsletterTextDiv3').mouseout(function(){
        $('#newsletterImageDiv3 .newsletterLayer').css({
    		background: 'none',
    		opacity: '1',
    		transition: 'all 0.5s ease-in-out'
		});
    });

    // ------------------------------------------------
    //        N E W S L E T T E R     L I S T
    // ------------------------------------------------
     $('#newsletterListDiv1').mouseover(function(){
        $('#newsletterListImageDiv1 #newsletterListLayer').css({
            background: 'rgb(71, 71, 71)',
            opacity: '0.7'
        });
    });
    $('#newsletterListDiv1').mouseout(function(){
        $('#newsletterListImageDiv1 #newsletterListLayer').css({
            background: 'none',
            opacity: '1',
            transition: 'all 0.5s ease-in-out'
        });
    });
    $('#newsletterListDiv2').mouseover(function(){
        $('#newsletterListImageDiv2 #newsletterListLayer').css({
            background: 'rgb(71, 71, 71)',
            opacity: '0.7'
        });
    });
    $('#newsletterListDiv2').mouseout(function(){
        $('#newsletterListImageDiv2 #newsletterListLayer').css({
            background: 'none',
            opacity: '1',
            transition: 'all 0.5s ease-in-out'
        });
    });
    $('#newsletterListDiv3').mouseover(function(){
        $('#newsletterListImageDiv3 #newsletterListLayer').css({
            background: 'rgb(71, 71, 71)',
            opacity: '0.7'
        });
    });
    $('#newsletterListDiv3').mouseout(function(){
        $('#newsletterListImageDiv3 #newsletterListLayer').css({
            background: 'none',
            opacity: '1',
            transition: 'all 0.5s ease-in-out'
        });
    });
	// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

});