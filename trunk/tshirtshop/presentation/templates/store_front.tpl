{* smarty *}
{config_load file='site.conf' }
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>{#site_title#}</title>
   <link rel="stylesheet" href="styles/tshirtshop.css" type="text/css">
</head>
<body>
<div id="doc" class="yui-t2">
   <div id="hd" role="banner"><h1>Header</h1></div>
   <div id="bd" role="main">
	<div id="yui-main">
	<div class="yui-b"><div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	<a href="index.php">
		<img src="images/tshirtshop.png" alt="tshirtshop logo" />
	</a>
	</div>
<div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	Place content here
	</div>
</div>
	</div>
	<div class="yui-b"><!-- YOUR NAVIGATION GOES HERE -->Place list of departments here</div>
	
	</div>
   <div id="ft" role="contentinfo"><p>Footer</p></div>
</div>
</body>
</html>
