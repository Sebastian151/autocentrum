$(document).ready(function() {
	/*tlacidla click*/
	$('.menu, nav-expanded > ul > li, .rezervovat, .rezervovatslider, #main #content .menuautopark ul li:first-child').click(function(){
		var url = $(this).find('a').attr('href');
		window.location = url;
	});	

	/*mobilna verzia*/
	$('.menu_click').click(function(){
		$('.menu').slideToggle(400,function(){
			$(this).toggleClass("nav-expanded").css('display', '');
		});
	});
	
	/*VALIDATOR*/
	if ($('#rezervacia').length || $('#kontakt').length)  { 
		$.validator.messages.required = 'Toto pole je povinné.';
		$.validator.messages.email = 'Nesprávny formát emailu.';
	}
	if ($('#rezervacia').length) { 
		$("#rezervacia").validate();
	}
	if ($('#kontakt').length) { 		
		$("#kontaktform").validate();
	}	
	
	/*DATE PICKER*/
	if ($('#datumprevzatia').length) { 
		$( "#datumprevzatia" ).datepicker({
		  dateFormat: "d.m.yy",
		  minDate: 1
		});
	}
	
	/*SLIDER*/
    if ($('#slider').length) { 
        $("#slider").owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true
        });
    }
	
	/*LIGHT BOX*/
    if ($('.content-gallery').length) { 
        for (i = 1; i <= $('.row').length; i++) {
            console.log(".blok" + i + "  a");
            $(".blok" + i + "  a").tosrus({
                effect: "fade",
                buttons: "inline",
                pagination: {
                    add: true
                },
                wrapper: {
                    classes: "img-border"
                }
            });
        }
    }
	
	/*GOOGLE MAP*/
	 function initializeGoogleMaps() {
        var mapProp = {
            center: new google.maps.LatLng(48.4045638, 19.1339073),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.HYBRID
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker1 = new google.maps.Marker({
            position: new google.maps.LatLng(48.5734595, 19.0736889),
        });
        var marker2 = new google.maps.Marker({
            position: new google.maps.LatLng(48.1809098, 18.8717763),
        });
        var marker3 = new google.maps.Marker({
            position: new google.maps.LatLng(48.3454741, 19.6001998),
        });
        var marker4 = new google.maps.Marker({
            position: new google.maps.LatLng(48.529366, 19.4361886),
        });
        var infowindow1 = new google.maps.InfoWindow({
            content: "SERVIS1"
        });
        var infowindow2 = new google.maps.InfoWindow({
            content: "SERVIS2"
        });
        var infowindow3 = new google.maps.InfoWindow({
            content: "SERVIS3"
        });
        var infowindow4 = new google.maps.InfoWindow({
            content: "SERVIS4"
        });
        marker1.setMap(map);
        marker2.setMap(map);
        marker3.setMap(map);
        marker4.setMap(map);
        google.maps.event.addListener(marker1, 'click', function() {
            infowindow1.open(map, marker1);
        });
        google.maps.event.addListener(marker2, 'click', function() {
            infowindow2.open(map, marker2);
        });
        google.maps.event.addListener(marker3, 'click', function() {
            infowindow3.open(map, marker3);
        });
        google.maps.event.addListener(marker4, 'click', function() {
            infowindow4.open(map, marker4);
        });
    }
    if ($('#googleMap').length) {
        google.maps.event.addDomListener(window, 'load', initializeGoogleMaps);
    }
	
});