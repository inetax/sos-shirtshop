<?php /* Smarty version 2.6.26, created on 2010-08-28 01:00:45
         compiled from gui.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'gui.tpl', 2, false),array('function', 'load_presentation_object', 'gui.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'gui','assign' => 'obj'), $this);?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
   <title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
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
    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=ClaimExaminer">Claim Examiner</a>
        <ul>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=AddExaminer">Add a Claim Examiner</a></li>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=ClaimExaminer">View All Claim Examiners</a></li>           
        </ul>
    </li>
    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=CasesInfo">Case Information</a>
        <ul>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=AddCaseInfo">Add Case Information</a></li>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=CasesInfo">View Cases</a></li>          
        </ul>
    </li>
    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=LawFirms">Law Firms</a>
    	<ul>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=AddLawFirm">Add Law Firm</a></li>
            <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
?view=AssignFirm2Claim">Assign Law Firm to Case</a></li>          
        </ul>
    </li>
    
    <li><a href="#">Other</a></li>
    <li><a href="#">Help</a></li>
</ul>
<p>&nbsp;</p><br/>

  </div>
   <div id="bd" role="main">
	<div class="yui-g">
	<!-- YOUR DATA GOES HERE -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	</div>

	</div>
   <div id="ft" role="contentinfo"><p><i>Powered by Sid So</i></p></div>
</div>
</body>
</html>