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

Class Search
{
	public $mResult;
	
	public function setResults($q, $value)
	{		
							
		switch (strtolower($value)) {
    	case "claimno":
        	$obj=Cases::GetClaimNo();
        	$field='ClaimNo';
        	break;
		case "examinerid":
        	$obj=Cases::GetExaminersID();
        	$field='ID';
        	break;
    	case "firmid":
        	$obj=Cases::GetLawFirmId();
        	$field='ID';
        	break;
    	default:
    		$obj=null;
        	$field='';
        	break;
		}
		
			
		for ($i=0;$i<count($obj);$i++)
		{
			
			if (strpos(strtolower($obj[$i][$field]), $q) !== false)
				$this->mResult = $this->mResult . $obj[$i][$field] . "\n";					
		}		
	}
	
	public function getResults()
	{
		return $this->mResult;
	}
}

if (isset($_GET['q']) && isset($_GET['value']))
{
	$dan = new Search;	
	$dan->setResults($_GET['q'],$_GET['value']);
	echo $dan->mResult;
}	


// Close the database connection
DatabaseHandler::Close();

?>