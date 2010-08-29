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
var states = "Alabama,Alaska,Arizona,Arkansas,California,Colorado,Connecticut,Delaware,Florida,Georgia,Hawaii,Idaho,Illinois,Indiana,Iowa,Kansas,Kentucky,Louisiana,Maine,Maryland,Massachusetts,Michigan,Minnesota,Mississippi,Missouri,Montana,Nebraska,Nevada,New Hampshire,New Jersey,New Mexico,New York,North Carolina,North Dakota,Ohio,Oklahoma,Oregon,Pennsylvania,Rhode Island,South Carolina,South Dakota,Tennessee,Texas,Utah,Vermont,Virginia,Washington,West Virginia,Wisconsin,Wyoming".split(",");
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

    } 
); 