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
    } 
); 