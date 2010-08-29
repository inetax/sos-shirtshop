<?php 
// Include utility Files
require_once '../' . 'include/config.php';
require_once 'error_handler.php';

//Set the error handler
ErrorHandler:: SetHandler();

// Load the database handler
require_once  'database_handler.php';

// Load Business Tier
require_once  'case.php';

$q = '';
if (isset($_GET['q'])) {
    $q = strtolower($_GET['q']);
}
if (!$q) {
    return;
}

$k='';
$obj=null;
if (isset($_GET['value'])) {
	switch (strtolower($_GET['value'])) {
    case "claimno":
        $obj=Cases::GetClaimNo();
        $k='ClaimNo';
        break;
	case "examinerid":
        $obj=Cases::GetExaminersID();
        $k='ID';
        break;
    case "firmid":
        $obj=Cases::GetLawFirmId();
        $k='ID';
        break;
    
	}	
}

	
for ($i=0;$i<count($obj);$i++)
{
if (strpos(strtolower($obj[$i][$k]), $q) !== false) {
		echo $obj[$i][$k] . "\n";
	}
	
}
  
  
// Close the database connection
DatabaseHandler::Close();

?>