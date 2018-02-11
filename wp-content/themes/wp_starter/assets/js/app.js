jQuery(document).ready(function($){
 $('.nav-item').children('a').addClass('nav-link');
//CIA NICE SLIDER PASPAUDUS

	function scrollBar(event){
		$(`html,body`).animate({
			scrollTop: $(event.data.className).offset().top
		}, 1000);
	}

	$(`.home`).click({className: ".background"},scrollBar);
	$(`.apie`).click({className: ".about-section"},scrollBar);
	$(`.produktai`).click({className: ".ingredients"},scrollBar);
	$(`.meniu`).click({className: ".menu"},scrollBar);
	$(`.atsiliepimai`).click({className: ".reviews"},scrollBar);
	$(`.rezervacija`).click({className: ".reservation-section"},scrollBar);
	$(`.kontaktai`).click({className: ".footer-container"},scrollBar);

	// Spalvos pakeitimas scrollinant
  $(document).scroll(function () {
    var $nav = $(".header");
		$nav.css('background-color','transparent');
		if ($(this).scrollTop() > $nav.height()) $nav.css('background-color','black');
  });
// SLAIDERIS

let sliderImages = document.querySelectorAll('.slide'),
		arrowLeft = document.querySelector('.arrow-left'),
		arrowRight = document.querySelector('.arrow-right'),
		current = 0;
		console.log(sliderImages);

// Nunulina PAVEIKSLELIUS IS NAUJO
function reset(){
	for(let i=0; i<sliderImages.length;i++){
		sliderImages[i].style.display = 'none';
		console.log(sliderImages[i])
	}
}
function startSlide(){
	reset();
	sliderImages[0].style.display='block';
}
//Rodo pries tai buvusia foto
function slideLeft(){
	reset();
	sliderImages[current-1].style.display='block';
	current--;
}
//Rodo kita/next FOTO
function slideRight(){
	reset();
	sliderImages[current+1].style.display='block';
	current++;
}
// Kairio mygtuko paleidimas per event'a
arrowLeft.addEventListener('click', function(){
	if (current === 0) {
		current = sliderImages.length;
	}
	slideLeft();
});
//Desinio mygtuko veikimo aprasymas
arrowRight.addEventListener('click', function(){
	if (current === sliderImages.length -1) {
		current = -1 ;
	}
	slideRight();
});

startSlide();

	jQuery('#burger-btn').click(function() {
		if (jQuery('#nav-list').is(":visible")) {
			jQuery('#nav-list').slideUp(500);
		} else {
			jQuery('#nav-list').slideDown(500);
		}
	});

	jQuery(window).resize(function() {
		if (jQuery(window).width() > 760) {
			jQuery('#nav-list').css('display', '');
		}
	});
});
