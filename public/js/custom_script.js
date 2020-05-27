jQuery(document).ready(function($) {
    "use strict";
	//Banner
    if ($('#home-slider').length) {
        $('#home-slider').owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            items: 1,
        });
    }
	
   //POST SLIDER
    if ($('.post-slider').length) {
        $('.post-slider').owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            items: 1,
        });
    }
	
	//AUDIO
	if ($('audio').length) {
	 $('audio').audioPlayer();
	}
	
	//bxslider
	if ($('.bxslider').length) {
	$('.bxslider').bxSlider({
  	pagerCustom: '#bx-pager'
		});
	}
	
	 //EVENT TIMER
    if ($('.countdown236').length) {
        var austDay = new Date();
        austDay = new Date(2018, 11 - 1, 11, 15, 35, 0);
        $('.countdown236').countdown({
            until: austDay,
        });
        $('#year').text(austDay.getFullYear());
    }
	
	
	 //PRETTYPHOTO
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
        $(".pretty-gallery a[rel^='prettyPhoto']").prettyPhoto();
    });

    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }
	
	//CONTACT MAP
    if ($('#map_contact_1').length) {
        var map;
        var myLatLng = new google.maps.LatLng(40.712784, -74.005941);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#2b2b2b'
                }, {
                    saturation: -100,
                }, {
                    lightness: 10
                }]
            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon-1.png'
        });
        marker.getPosition();
        //End marker
    }
    //Function End
	


    //Function End
});