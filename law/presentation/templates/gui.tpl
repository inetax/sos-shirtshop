{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="gui" assign="obj"}
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
   <title>{#site_title#}</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="styles/law.css" type="text/css">
   <link rel="stylesheet" href="styles/jquery.autocomplete.css" type="text/css" />   
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
   <script type="text/javascript" src="js/jquery.autocomplete.js"></script>
   <script type="text/javascript" src="js/jquery.ui.core.js"></script>
   <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>   
   <script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Complaint Dept.</h1>
     {include file='nav.tpl' }
<p>&nbsp;</p><br/>

  </div>
   <div id="bd" role="main">
	<div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	{include file=$obj->mContentsCell}	
	</div>

	</div>
   <div id="ft" role="contentinfo"><p><i>Powered by Sid So</i></p></div>
</div>
</body>
</html>
