var directionsService;
var map;
function initMap(){
    map = new google.maps.Map(document.getElementById("map"),{
        center: {lat: 22.6, lng: 88.4},
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    var options={
    types: ['(cities)']
}
    
    var input1 = document.getElementById("from");
    var autocomplete1 = new google.maps.places.Autocomplete(input1,options);
    var input2 = document.getElementById("to");
    var autocomplete2 = new google.maps.places.Autocomplete(input2,options);
    
    
}

function calcRoute(){
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
    }

        
    var directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    
    directionsService = new google.maps.DirectionsService();
    
    directionsService.route(request,function(result,status){
    if(status == google.maps.DirectionsStatus.OK){
        $("#output").html("<div class='alert-info'>From:"+document.getElementById("from").value+".<br />To:"+document.getElementById("to").value+".<br />Driving distance: "+result.routes[0].legs[0].distance.text+".<br />Duration: "+result.routes[0].legs[0].duration.text+".</div>");
        directionsDisplay.setDirections(result);
    }else{
        directionsDisplay.setDirections({routes: []});
        
        map.setCenter({lat: 22.6, lng: 88.4});
        
        $("#output").html("<div class='alert-danger'>Could not retrieve driving distance.</div>");
    }
});
}



