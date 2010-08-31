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
   <script type="text/javascript" src="js/custom.js"></script>
   
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Complaint Dept.</h1>
   <ul id="jsddm">
    <li><a href="{$obj->mSiteUrl}?view=ClaimExaminer">Claim Examiner</a>
        <ul>
            <li><a href="{$obj->mSiteUrl}?view=AddExaminer">Add a Claim Examiner</a></li>
            <li><a href="{$obj->mSiteUrl}?view=ClaimExaminer">View All Claim Examiners</a></li>           
        </ul>
    </li>
    <li><a href="{$obj->mSiteUrl}?view=CasesInfo">Case Information</a>
        <ul>
            <li><a href="{$obj->mSiteUrl}?view=AddCaseInfo">Add Case Information</a></li>
            <li><a href="{$obj->mSiteUrl}?view=CasesInfo">View Cases</a></li>          
        </ul>
    </li>
    <li><a href="{$obj->mSiteUrl}?view=LawFirms">Law Firms</a>
    	<ul>
            <li><a href="{$obj->mSiteUrl}?view=AddLawFirm">Add Law Firm</a></li>
            <li><a href="{$obj->mSiteUrl}?view=AssignFirm2Claim">Assign Law Firm to Case</a></li>          
        </ul>
    </li>
    
    <li><a href="{$obj->mSiteUrl}?view=UpdatevMailMerge">vMailMerge</a></li>
    <li><a href="#">Help</a></li>
</ul>
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
