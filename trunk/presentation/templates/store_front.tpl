{* smarty *}
{config_load file='site.conf' }
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>{#site_title#}</title>
   <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" href="{$obj->mSiteUrl}styles/tshirtshop.css" type="text/css">
</head>
<body>
<div id="doc" class="yui-t2">
   <div id="hd" role="banner"><h1>Header</h1></div>
   <div id="bd" role="main">
	<div id="yui-main">
	<div class="yui-b"><div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	<a href="{$obj->mSiteUrl}">
		<img src="{$obj->mSiteUrl}images/tshirtshop.png" alt="tshirtshop logo" />
	</a>
	</div>
<div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	Place content here
	</div>
</div>
	</div>
	<div class="yui-b">{include file='departments_list.tpl' }</div>
	
	</div>
   <div id="ft" role="contentinfo"><p>Footer</p></div>
</div>
</body>
</html>
