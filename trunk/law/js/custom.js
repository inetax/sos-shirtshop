var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function jsddm_open()
{  jsddm_canceltimer();
   jsddm_close();
   ddmenuitem = $(this).find('ul').css('visibility', 'visible');}

function jsddm_close()
{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{  closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{  if(closetimer)
   {  window.clearTimeout(closetimer);
      closetimer = null;}}

// Arrays for autocomplete plugins
var states = "AL,AK,AZ,AR,CA,CO,CT,DE,FL,GA,HI,ID,IL,IN,IA,KS,KY,LA,ME,MD,MA,MI,MN,MS,MO,MT,NE,NV,NH,NJ,NM,NY,NC,ND,OH,OK,OR,PA,RI,SC,SD,TN,TX,UT,VT,VA,WA,WV,WI,WY".split(",");
var honorific= 'Mr\. Ms\. Mrs\. Miss'.split(" ");
var policyLimit='25/50 50/100 100/300'.split(" "); 

$(document).ready(function() 
    { 
        $("#tableView").tablesorter( {sortList: [[0,0]]} );
       
        $("#state").autocomplete(states);
        $("#honorific").autocomplete(honorific);
        $("#policyLimit").autocomplete(policyLimit);
        $("#examinerId").autocomplete('business/search.php?value=examinerid');
        $("#lawFirmId").autocomplete('business/search.php?value=firmid');
        $("#claimNo").autocomplete('business/search.php?value=claimno');
        
        $('#jsddm > li').bind('mouseover', jsddm_open);
        $('#jsddm > li').bind('mouseout',  jsddm_timer);
		document.onclick = jsddm_close;
		
		$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
		
		$('#fax').mask("(999)999-9999"); 
		$('#telephone').mask("(999)999-9999");
		
		$("#honorific").focus(function(){$("#tip-honorific").fadeIn('slow'); return false;});
		$("#honorific").blur(function(){$("#tip-honorific").toggle(); return false;});				
		$("#plaintiff").focus(function(){$("#tip-plaintiff-docheading").fadeIn('slow'); return false;});
		$("#plaintiff").blur(function(){$("#tip-plaintiff-docheading").toggle(); return false;});
		$("#plaintiff_ab").focus(function(){$("#tip-plaintiff-list").fadeIn('slow'); return false;});
		$("#plaintiff_ab").blur(function(){$("#tip-plaintiff-list").toggle(); return false;});
		$("#defendant").focus(function(){$("#tip-defendant-docheading").fadeIn('slow'); return false;});
		$("#defendant").blur(function(){$("#tip-defendant-docheading").toggle(); return false;});
		$("#defendant_ab").focus(function(){$("#tip-defendant-list").fadeIn('slow'); return false;});
		$("#defendant_ab").blur(function(){$("#tip-defendant-list").toggle(); return false;});
		$("#client").focus(function(){$("#tip-client").fadeIn('slow'); return false;});
		$("#client").blur(function(){$("#tip-client").toggle(); return false;});

		
    } 
); 
