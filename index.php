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
<script src="custom_script.js" type="text/javascript"></script>

</head> 
<body> 
<div id="loginPage" data-role="page">
<div data-role="header">
<h1>App Authentication</h1>
</div>

<div data-role="content">   
    <div id="landmark-1" data-landmark-id="1">
   
    <div data-role="fieldcontain" class="ui-hide-label">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="" placeholder="Username" />
    </div>

    <div data-role="fieldcontain" class="ui-hide-label">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="" placeholder="Password" />
    </div>

    <input type="submit" value="Staff Login" id="submitButton">
    
</div>  
</div>

<div data-role="footer">
    <h4>&copy TM NGN Migration's</h4>
</div>



</body>
</html>