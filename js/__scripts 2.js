//Map functionality
var latLng1 = {lat: 43.68969, lng: -79.59641};
var latLng2 = {lat: 43.62090, lng: -79.57255};
var map1 = 'map01'
var map2 = 'map02'
var location1 =  "1911 Dundas St. E Toronto L4X 2W7";
var location2 =  "297 Carlingview Dr. Toronto M9W 5G3";
//

function initMap(_latLng,_map,_loc) {
	if( _latLng === undefined || _latLng === null ){
		var _latLng = {lat: 43.68969, lng: -79.59641};
		var _map = 'map01'
		var _loc =  "1911 Dundas St. E Toronto L4X 2W7";	
	}
	//
	console.log('map called');
	//
	var myLatLng = _latLng;
  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById(_map), {
    center: myLatLng,
    zoom: 15
  });
  //
  // Create a marker and set its position.
	var marker = new google.maps.Marker({
		map: map,
		position: myLatLng
	});
	// marker.setMap(map);
	//
	var infowindow = new google.maps.InfoWindow({
	  content:_loc
	  });

	
	//
	google.maps.event.addDomListener(window, 'resize', function() {
	    // map.setCenter(center);
	    console.log('center');
      window.setTimeout(function() {
        map.panTo(marker.getPosition());
      }, 500);
	});

    marker.addListener('click', function() {
      infowindow.open(map,marker);
    });
}


var app = {};
//
app.homePreload = function(){
	$('.showcase01').waitForImages(function() {
	 	$('.showcase01 .preloader').remove();
	});
	$('.process').waitForImages(function() {	
	 	$('.processHolder .preloader').remove();
	});
	$('.showcase02').waitForImages(function() {
	 	$('.showcase02 .preloader').remove();
	});
	$('.about').waitForImages(function() {
	 	$('.aboutHolder .preloader').remove();
	});
	$('.showcase03').waitForImages(function() {
	 	$('.showcase03 .preloader').remove();
	});

}
//
app.imageLoader = function(target){

	var _home = $('.home')[0];
	var _process = $('.process')[0];
	var _about = $('.about')[0];
	var _portfolio = $('.portfolio')[0];
	var _rooms = $('.rooms')[0];
	var _showcase = $('.homeGallery')[0];

	if( _home ){
		app.homePreload();
		console.log('Home page');
	} 

}
///
///
app.mapReveal = function(){
	$('.contact .contactTab').on('click', function(){
		$('.contactFormSpace').removeClass('display-hide');
		$('.map01').addClass('display-hide');
		$('.map02').addClass('display-hide');
		//
		$('.contactTab').removeClass('map-tab-opacity');
		$('.tabOne').addClass('map-tab-opacity');
		$('.tabTwo').addClass('map-tab-opacity');
		//
	});
	$('.contact .tabOne').on('click', function(){
		$('.map01').removeClass('display-hide');
		$('.map02').addClass('display-hide');
		$('.contactFormSpace').addClass('display-hide');
		//
		$('.tabOne').removeClass('map-tab-opacity');
		$('.tabTwo').addClass('map-tab-opacity');
		$('.contactTab').addClass('map-tab-opacity');
		//
		initMap(latLng1,map1,location1);
	});
	$('.contact .tabTwo').on('click', function(){
		$('.map02').removeClass('display-hide');
		$('.map01').addClass('display-hide');
		$('.contactFormSpace').addClass('display-hide');
		//
		$('.tabTwo').removeClass('map-tab-opacity');
		$('.tabOne').addClass('map-tab-opacity');
		$('.contactTab').addClass('map-tab-opacity');
		//
		initMap(latLng2,map2,location2);
	});
}
//
//
//
app.getRoom = function(){
	$('.port_home').on('click', function(){
		app.getTheLink = $(this).data('link');
		window.location = app.getTheLink;
		console.log('clicked the link')
	});
};
//
//

//
//
app.overlayOn = false;
//

$('.flexslider-rooms').flexslider({
	controlNav: true,               
	keyboard: true,
	smoothHeight: true,
	useCSS: true, 
});
//
$('.flexslider-rooms').data('flexslider');
//
app.showPic = function(){

	//
	$('.rooms_imgs').on('click', function(){
		app.getTheCount = $(this).data('slide');
		$('.flexslider-rooms').flexslider(app.getTheCount);
		//
		$('.overlay').addClass('display_overlay');
		$('.overlay').addClass('show');
		//
		$('.imageSlider').addClass('display_overlay');
		$('.imageSlider').addClass('show');
		//
		// $('.imageSlider').append('<div class="imageHolder"><img src="' + getTheLink + '" /></div>');
		// app.overlayOn = true;
		//
	});
	//
}
//
// app.showOverlay = function(){
	console.log('show overlay')
	$('.consultation p, .consultTwo a').on('click', function(){
		console.log('show form');
		$('.overlay').addClass('display_overlay');
		$('.overlay').addClass('show');
		//
		$('.consultationForm').addClass('display_overlay');
		$('.consultationForm').addClass('show');
		//
		app.overlayOn = true;
	});
// }
//
app.hideOverlay = function(){

	$('.closeOverlay, .closeOverlayButton').on('click', function(){
		console.log('hide form');
		$('.overlay').removeClass('show');
		$('.consultationForm').removeClass('show');
		$('.imageSlider').removeClass('show');
		setTimeout(function(){
			$('.overlay').removeClass('display_overlay');
			$('.consultationForm').removeClass('display_overlay');
			$('.imageSlider').removeClass('display_overlay');
			$('.imageHolder').remove();
		},350);
		// //
		// app.overlayOn = false;
		});
}
//

//
app.flexSliding = function(){
		$('.showcase01 .rollover, .showcase01 .rolloverTitle').addClass('display-show');
		//
		$('.showcase01').removeClass('invisible');
		//
		$('.flexslider-showcase1').flexslider({
			animation: "fade", 
			controlNav: false,   
			directionNav: false, 
			slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 1500,
			pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,
			easing: "swing",
			pausePlay: false,
			before: function(slider) {
			        // TODO: check if the browser supports css animations before delaying the slides

			        // delay slide fadeOut to show the css animations
			        slider.slides.eq(slider.currentSlide).delay(500);

			        // delay slide fadeIn until the animations on the prev slide are over
			        slider.slides.eq(slider.animatingTo).delay(2000);

			}
		});
		//
		// //
		setTimeout(function(){
		$('.processHolder .rollover, .processHolder .rolloverTitle').addClass('display-show');
		//
		$('.processHolder').removeClass('invisible');
		//
		$('.flexslider-process').flexslider({
			animation: "fade", 
			controlNav: false,   
			directionNav: false, 
			slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 1500,
			pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,
			easing: "swing",
			pausePlay: false,
			before: function(slider) {
			        // TODO: check if the browser supports css animations before delaying the slides

			        // delay slide fadeOut to show the css animations
			        slider.slides.eq(slider.currentSlide).delay(500);

			        // delay slide fadeIn until the animations on the prev slide are over
			        slider.slides.eq(slider.animatingTo).delay(2000);

			}
		});
	}, 1000);
		//
		setTimeout(function(){
			$('.showcase02 .rollover, .showcase02 .rolloverTitle').addClass('display-show');
		//
		$('.showcase02').removeClass('invisible');
			//
		$('.flexslider-showcase2').flexslider({
			animation: "fade", 
			controlNav: false,   
			directionNav: false, 
			slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 1500,
			pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,
			easing: "swing",
			pausePlay: false,
			before: function(slider) {
		        // TODO: check if the browser supports css animations before delaying the slides

		        // delay slide fadeOut to show the css animations
		        slider.slides.eq(slider.currentSlide).delay(500);

		        // delay slide fadeIn until the animations on the prev slide are over
		        slider.slides.eq(slider.animatingTo).delay(2000);

				}

			});
		}, 2000);


		setTimeout(function(){
			$('.showcase03 .rollover, .showcase03 .rolloverTitle').addClass('display-show');
		//
		$('.showcase03').removeClass('invisible');
			//
			$('.flexslider-showcase3').flexslider({
				animation: "fade", 
				controlNav: false,   
				directionNav: false, 
				slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationSpeed: 1500,
				pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				pauseOnHover: false,
				easing: "swing",
				pausePlay: false,
				before: function(slider) {
				        // TODO: check if the browser supports css animations before delaying the slides

				        // delay slide fadeOut to show the css animations
				        slider.slides.eq(slider.currentSlide).delay(500);

				        // delay slide fadeIn until the animations on the prev slide are over
				        slider.slides.eq(slider.animatingTo).delay(2000);

				}
			});
		}, 3000);

		setTimeout(function(){
			$('.aboutHolder .rollover, .aboutHolder .rolloverTitle').addClass('display-show');
		//
		$('.aboutHolder').removeClass('invisible');
			//
			$('.flexslider-about').flexslider({
				animation: "fade", 
				controlNav: false,   
				directionNav: false, 
				slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationSpeed: 1500,
				pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				pauseOnHover: false,
				easing: "swing",
				pausePlay: false,
				before: function(slider) {
				        // TODO: check if the browser supports css animations before delaying the slides

				        // delay slide fadeOut to show the css animations
				        slider.slides.eq(slider.currentSlide).delay(500);

				        // delay slide fadeIn until the animations on the prev slide are over
				        slider.slides.eq(slider.animatingTo).delay(2000);
				}
			});
		}, 4000);
}
//
app.clearTimeouts = function(){
	for (var i = 0 ; i < 99999 ; i++) {
	    clearTimeout(i); 
	}
}
//
app.flexBtns = function(){
	//
		btnBool = false;
		// //
		$('.panelBtn').mouseover(function(){
			clearTimeout(app.btnStartChecker);
			clearTimeout(app.panel1);
			clearTimeout(app.panel2);
			clearTimeout(app.panel3);
			clearTimeout(app.panel4);
			clearTimeout(app.panel5);
			if( btnBool === false ){
				app.btnStopChecker = setTimeout(function(){
					$('.flexslider-showcase1').flexslider('pause');
					$('.flexslider-process').flexslider('pause');
					$('.flexslider-showcase2').flexslider('pause');
					$('.flexslider-showcase3').flexslider('pause');
					$('.flexslider-about').flexslider('pause');
					console.log('pause all');
					btnBool = true;
					// app.clearTimeouts();
					console.log(btnBool);
				}, 1000);
			}
		});
		// //
		$('.panelBtn').mouseleave(function(){
			clearTimeout(app.btnStopChecker);
			//
			app.btnStartChecker = setTimeout(function(){
			if( btnBool === true ){
				app.panel1 = setTimeout(function(){
					$('.flexslider-showcase1').flexslider('next')
				$('.flexslider-showcase1').flexslider('play');
				},600);
				// //
				app.panel2 = setTimeout(function(){
					$('.flexslider-process').flexslider('next');
					$('.flexslider-process').flexslider('play');
				},2000);
				// //
				app.panel3 = setTimeout(function(){
					$('.flexslider-showcase2').flexslider('next');
					$('.flexslider-showcase2').flexslider('play');
				},3000);
				// //
				app.panel4 = setTimeout(function(){
					$('.flexslider-showcase3').flexslider('next');
					$('.flexslider-showcase3').flexslider('play');
				},4000);
				// //
				app.panel5 = setTimeout(function(){
					$('.flexslider-about').flexslider('next');
					$('.flexslider-about').flexslider('play');
				},5000);
				
				btnBool = false;
				console.log('play all');
				console.log(btnBool);
			}
				}, 600);
			//
		});
		//
	
}
////////////
////////////
// Parallax JS
$(window).scroll(function() {
	app.getScroll = $(this).scrollTop();
	// console.log(getScroll)
});


app.moveBg = function(){
	$(window).scroll(function() {
		//
		app.getScroll = $(this).scrollTop();
		app.getScrollPct = (app.getScroll/100)*2.5;
		app.bgScroll = app.getScrollPct = 65 - app.getScrollPct;
		app.bgPos = 'center ' + app.bgScroll +'%';
		//
		$( '.innerKey' ).each(function(){
			var keyImage = $(this);
			keyImage.css({backgroundPosition: app.bgPos})
		});
		//
	});
}
////////////
var contactPage = $('.container').hasClass('contact');
var homePage = $('.container').hasClass('home');

///////////
//
//////////////
//
app.setContactTabHeight = function(){
	
		t1Height = $('.tabOne').innerHeight();
		$('.contactTab').css({ height: t1Height });
	//
}
//
app.contactImage = function(){
	for (i = 1; i < 4; i++) {
		var contactHolder = $('.cImageHolder .cImage-' + i).data('holder');
		var contactUrlHolder = 'url(' + contactHolder + ')';
		console.log(contactUrlHolder);
		//
		$('.no' + i).css({"background-image" : contactUrlHolder });
	}
};
////////////////////
////////////////////
/////MOBILE
app.isMobile = false;
app.checkMobile = function(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		app.isMobile = true;
	} else {
	}
}
//
$('.flexslider-home-mobile').flexslider({
	controlNav: false,               
	animationLoop: true,
	animation: "fade", 
	slideshowSpeed: 5000, 
	animationSpeed: 1000,
	directionNav: false
});
//
$('.flexslider-room-mobile').flexslider({
	controlNav: false,               
	animationLoop: true,
	animation: "slide", 
	directionNav: false,
	touch: true
});
//
app.hamburgerMenu = function(){
	
	$('.hamMenu').on('click',function(){
		$('.nav-container-mobile').toggleClass('nav-slide-in');
		$(this).toggleClass('bg-brown');
		console.log('hamburger clicked');
	});
	
}
//
app.mobileMapReveal = function(){
	$('.mobile-map .tabOne').on('click', function(){
		console.log('msg')
		$('.map01').removeClass('display-hide');
		$('.map02').addClass('display-hide');
		//
		$('.tabTwo').addClass('map-tab-opacity');
		$('.tabOne').removeClass('map-tab-opacity');
		//
		initMap(latLng1,map1,location1);
	});
	$('.mobile-map .tabTwo').on('click', function(){
		console.log('msg')
		$('.map02').removeClass('display-hide');
		$('.map01').addClass('display-hide');
		//
		$('.tabOne').addClass('map-tab-opacity');
		$('.tabTwo').removeClass('map-tab-opacity');
		//
		initMap(latLng2,map2,location2);
	});
}
////
app.showOverlay = function(){
	$('.consult p').on('click', function(){
		// console.log('show form');
		$('.overlay').addClass('display_overlay');
		$('.overlay').addClass('show');
		//
		$('.consultationForm').addClass('display_overlay');
		$('.consultationForm').addClass('show');
		//
		$('.nav-container-mobile').toggleClass('nav-slide-in');
		$('.hamMenu').toggleClass('bg-brown');
	});
}
///////
$('.flexslider-room-mobile').on('tap', function(){
	setTimeout(function(){
		$('.handInstruction').addClass('invisible');
		setTimeout(function(){
			$('.handInstruction').addClass('display-hide');
		}, 1000);
	}, 2500);
});

////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
////////////////////
$(function(){
	app.showOverlay();
	app.checkMobile();
	app.hideOverlay();
	//
	if( contactPage ){
		app.mapReveal();
		console.log('Contact page');
		setTimeout(function(){
			app.setContactTabHeight();
		}, 50);
		app.contactImage();
		//
		$(window).on('resize', function(){
			app.setContactTabHeight();
		});
	}
	//
	if( homePage ){
		app.homePreload();
		app.flexSliding();
		setTimeout(function(){
			if(app.isMobile === false){
				app.flexBtns();
			}
		}, 5000);
		console.log('Home page');
	}
	//
	app.getRoom();
	app.showPic();
	//
	app.moveBg();
	///////
	///////
	///////
	if( app.isMobile ){
		app.hamburgerMenu();
		app.mobileMapReveal();
	}
});
//


