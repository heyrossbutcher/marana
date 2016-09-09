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
  // console.log(map.center + ' called');
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
		//
		setTimeout(function(){
			app.showcaseCount('1', 6500);
		}, 500);
		//
		 $('.showcase01 .rollover, .showcase01 .rolloverTitle').addClass('display-show');
		 //
		 setTimeout(function(){
		 	$('.showcase01 .preloader').remove();
		 }, 100)
	});
	$('.process').waitForImages(function() {	
		//
		setTimeout(function(){
			$('.process').addClass('show');
		}, 1000);
		//
		 $('.process .rollover, .process .rolloverTitle').addClass('display-show');
		 //
		 setTimeout(function(){
		 	$('.processHolder .preloader').remove();
		 }, 100)
	});
	$('.showcase02').waitForImages(function() {
		//
		setTimeout(function(){
			app.showcaseCount('2', 6500);
		}, 1500);
		//
		 $('.showcase02 .rollover, .showcase02 .rolloverTitle').addClass('display-show');
		 //
		 setTimeout(function(){
		 	$('.showcase02 .preloader').remove();
		 }, 100)
	});
	$('.about').waitForImages(function() {
		//
		setTimeout(function(){
			$('.about').addClass('show');
		}, 2000);
		//
		 $('.about .rollover, .about .rolloverTitle').addClass('display-show');
		 console.log('About loaded');
		 $('.aboutHolder .preloader').addClass('hide');
		 setTimeout(function(){
		 	$('.aboutHolder .preloader').remove();
		 }, 100)
	});
	$('.showcase03').waitForImages(function() {
		//
		setTimeout(function(){
			app.showcaseCount('3', 6500);
		}, 2500);
		//
		 $('.showcase03 .rollover, .showcase03 .rolloverTitle').addClass('display-show');
		 //
		 setTimeout(function(){
		 	$('.showcase03 .preloader').remove();
		 }, 100)
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
//
    // All descendant images have loaded, now slide up.
    // setTimeOut
//    
// });

//
// app.showPanels = function(){
// 	app.showcaseCount('1');
// 	app.showcaseCount('2');
// 	app.showcaseCount('3');
// 	$('.process').addClass('show');
// 	$('.about').addClass('show');
// }
//
app.showcaseCount = function(num, delay){
	var counter = 1;
	var upper = $( '.showcase0' + num + ' .showcase-holder' );
	var target = $( '.sh-0' + num + '-' + counter );
	var fadeIn = target;
	var fadeOut = '';
	var divLength = upper.length;
	//
	target.addClass('show');
	//
	function timer(i, num){
		  fadeOut = fadeIn;
		  //
		  fadeOut.removeClass('show');
		  fadeIn = $( '.sh-0' + num + '-' + counter );
		  //
		  setTimeout(function(){
				fadeIn.addClass('show');
		  }, 2500);
	}
	  setInterval(function() {
	  		counter++;
	  		timer(counter, num);
	  		if ( counter === divLength ){
	  			counter = 0;
	  		}
	  }, delay);
}
///
///
///
///
app.mapReveal = function(){
	$('.tabOne').on('click', function(){
		$('.map01').removeClass('display-hide');
		$('.map02').addClass('display-hide');
		//
		$('.tabOne').removeClass('map-tab-opacity');
		$('.tabTwo').addClass('map-tab-opacity');
		//
		initMap(latLng1,map1,location1);
	});
	$('.tabTwo').on('click', function(){
		$('.map02').removeClass('display-hide');
		$('.map01').addClass('display-hide');
		//
		$('.tabTwo').removeClass('map-tab-opacity');
		$('.tabOne').addClass('map-tab-opacity');
		//
		initMap(latLng2,map2,location2);
	});
}
//
app.overlayOn = false;
//
app.showPic = function(){
	$('.rooms_imgs').on('click', function(){
		var getTheLink = $(this).data('link');
		// var getTheLink = $(this);
		console.log(getTheLink);
		//
		$('.overlay').addClass('display_overlay');
		$('.overlay').addClass('show');
		//
		$('.imageSlider').addClass('display_overlay');
		$('.imageSlider').addClass('show');
		//
		$('.imageSlider').append('<div class="imageHolder"><img src="' + getTheLink + '" /></div>');
		app.overlayOn = true;
		//
		var picHeight = $('.imageSlider').innerHeight();
		console.log(picHeight);
		if(picHeight > 500){
			console.log('Too high!!')
			$('.imageSlider').css({'width':'25%'});
		}
	});
}
//
app.showOverlay = function(){
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
}
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
			$('.imageSlider').attr('style', '');
			$('.imageSlider').removeClass('display_overlay');
			$('.imageHolder').remove();
		},350);
		// //
		// app.overlayOn = false;
		});
}
//
$(function(){
	app.showPic();
	//
	app.showOverlay();
	app.hideOverlay();
	app.mapReveal();
	//
	app.imageLoader();
	//

	// google.maps.event.trigger(map, "resize");
	// map.panTo(marker.getPosition());
	// map.setZoom(14);
});
// $(window).on('resize', function(){
// 	console.log('resize');
// 	var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
// 	       var mapOptions = {
// 	         center: myLatlng,
// 	         zoom: 8
// 	       };

// 	   var map = new google.maps.Map(document.getElementById("map-canvas"),
// 	       mapOptions);

// 	   var marker = new google.maps.Marker({
// 	         position: myLatlng,
// 	         map: map,
// 	         title: 'Hello World!'
// 	   });

// 	   google.maps.event.addListener(map, 'center_changed', function() {
// 	       // 0.1 seconds after the center of the map has changed,
// 	       // set back the marker position.
// 	       window.setTimeout(function() {
// 	         var center = map.getCenter();
// 	         marker.setPosition(center);
// 	       }, 100);
// 	   });

// });