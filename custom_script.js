navigator.geolocation.getCurrentPosition (function (pos)

{

  lat = pos.coords.latitude;

  lng = pos.coords.longitude;

 

});    
$(document).ready(function() {

 


$('#submitButton').click(function(){

 var username=$("#username").val();
 var password=$("#password").val();
 var datastring="username="+username+"&password="+password+"&lat="+lat+"&lng="+lng;	
 
 $.mobile.allowCrossDomainPages = true; 
 
 $.ajax({ 
     url: 'http://58.27.84.166/mcconline/migrate/Authentication_web_app.php',
     type: 'GET',
	 cache: false,
     data: datastring,
     success: function(data){
		 var successdata=data;
         if(data){
			 window.location.replace("index2.php?username="+username+"&lat="+lat+"&lng="+lng+"&location="+data);
          
         }else if(!data){
             alert("Authentication Invalid. Please try again!");
                     
        }

     }
 }); 
}); 

});
