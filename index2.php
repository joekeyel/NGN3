<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="css/themes1/jquery.mobile.icons.min.css" rel="stylesheet" type="text/css"/>
<link href="css/themes1/ngn_migration1.css" rel="stylesheet" type="text/css"/>
<link href="css/themes1/ngn_migration1.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script  type="text/javascript">
$(function () {
$("#page2-click").click(function(){
		
		 items ='';
        $.getJSON("http://58.27.84.166/mcconline/migrate/json_migration_pending3.php?jsoncallback=?", function(data){
            
            $.each(data, function(i,outputt){                   
            items += '<li class="info-panel"><a href="#" id="' + 'i ">' +outputt.site_name+":"+ outputt.mig_date+ '</a></li>';
            });
           $('#listitem2').append(items).promise().done(function () {
			   $(this).listview("refresh");
			     $(".info-panel").click(function(){
			      $("#details-page").data("data",data[this.id])
			      $.mobile.changePage("#details-page");
			         
			       });
			   });

      
        
            });
			
		 });// JavaScript Document
		 
$("#page3-click").click(function(){
		
		 items ='';
        $.getJSON("http://58.27.84.166/mcconline/migrate/json_migration_pending4.php?jsoncallback=?", function(data){
            
            $.each(data, function(i,outputt){                   
            items += '<li class="info-panel2"><a href="#" id="' + 'i ">' +outputt.site_name+":"+ outputt.mig_date+ '</a></li>';
            });
           $('#listitem3').append(items).promise().done(function () {
			   $(this).listview("refresh");
			     $(".info-panel2").click(function(){
			      $("#details-page").data("data",data[this.id])
			      $.mobile.changePage("#details-page");
			         
			       });
			   });

      
        
            });
			
		 });// JavaScript Document

$("#page4-click").click(function(){
		
		 items ='';
        $.getJSON("http://58.27.84.166/mcconline/migrate/json_migration_pending5.php?jsoncallback=?", function(data){
            
            $.each(data, function(i,outputt){                   
            items += '<li class="info-panel3"><a href="#" id="' + 'i ">' +outputt.site_name+":"+ outputt.mig_date+ '</a></li>';
            });
           $('#listitem4').append(items).promise().done(function () {
			   $(this).listview("refresh");
			     $(".info-panel3").click(function(){
			      $("#details-page").data("data",data[this.id])
			      $.mobile.changePage("#details-page");
			         
			       });
			   });

      
        
            });
			
		 });
$("#page5-click").click(function(){
		
		 items ='';
        $.getJSON("http://58.27.84.166/mcconline/migrate/json_migration_pending6.php?jsoncallback=?", function(data){
            
            $.each(data, function(i,outputt){                   
            items += '<li class="info-panel4"><a href="#" id="' + 'i ">' +outputt.site_name+":"+ outputt.mig_date+ '</a></li>';
            });
           $('#listitem5').append(items).promise().done(function () {
			   $(this).listview("refresh");
			     $(".info-panel4").click(function(){
			      $("#details-page").data("data",data[this.id])
			      $.mobile.changePage("#details-page");
			         
			       });
			   });

      
        
            });
			
		 });		 
				 
 
$("#logout").click(function(){
	 window.location.replace("index.php");
          
	});

});


 </script>
<style>
.ui-bar {
    padding :5px 0px 5px 0px !important;
    margin :5px 0px 5px 0px !important;
}
</style>
</head> 
<body> 




<div data-role="page" id="page">
	<div data-role="header" data-theme="b"><a href="#"  data-role="button" id="logout">Log Out</a>
		<h1>NGN Migration</h1>
	</div>
	<div data-role="content"><p>
    Welcome <?php echo $_GET['username']."<br>";
	 echo $_GET['lat']."<br>";
	 echo $_GET['lng']."<br>";
	 echo $_GET['location'];
	
	   ?>
    </p>
	  <ul data-role="listview">
	    <li><a id="page2-click" href="#page2">Migration Pending</a></li>
          <li><a id="page3-click" href="#page3">Jumpering Pending</a></li>
		  <li><a id="page4-click" href="#page4">Soft-Freeze</a></li>
          <li><a id="page5-click" href="#page5">All Migration</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page2">
	<div data-role="header"><a href="#" data-rel="back" data-role="button">Go back</a>
		<h1>Migration Pending</h1>
	</div>
	<div data-role="content">
    	
		<ul data-role="listview" id="listitem2" data-inset="true"  >
        <li data-role="list-divider"  role="heading">Site</li>
        </ul>	
       
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header"><a href="#" data-rel="back" data-role="button">Go back</a>
		<h1>Jumpering Pending</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview" id="listitem3" data-inset="true"  >
        <li data-role="list-divider"  role="heading">Site</li>
        </ul>	
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header"><a href="#" data-rel="back" data-role="button">Go back</a>
		<h1>Soft-Freeze</h1>
	</div>
	<div data-role="content">	
	<ul data-role="listview" id="listitem4" data-inset="true"  >
        <li data-role="list-divider"  role="heading">Site</li>
        </ul>	
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page5">
	<div data-role="header"><a href="#" data-rel="back" data-role="button">Go back</a>
		<h1>All Migration</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview" id="listitem5" data-inset="true"  >
        <li data-role="list-divider"  role="heading">Site</li>
        </ul>		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="details-page">
    <div data-role="header" data-theme="b"><a href="#" data-rel="back" data-role="button">Go back</a>

         <h1>Employee Details</h1>

    </div>
    <div data-role="content">
    
    
    </div>
</div>

</body>
</html>