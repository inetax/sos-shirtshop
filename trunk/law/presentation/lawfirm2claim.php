<?php 
Class Lawfirm2claim
{
 	public $mLinkToAssignFirm2Claim;
	public $mErrorMessage = array('lawFirmId' => '',
        'claimNo' => '');
   	  
	public function __construct()
	{
		$this->mLinkToAssignFirm2Claim=Link::ToAssignFirm2Claim();		
	}
	
	public function init()
	{
	 if (isset($_POST['submit']))
    {
   
    $lawFirmId=$_POST['lawFirmId'];
    $claimNo=$_POST['claimNo'];
    
    $this->check_data();      

    if (count($this->mErrorMessage) ==0) 		
		$this->handle_data($lawFirmId,$lawFirmName,$address,$city,$state,$zipCode,$telephone);
    }
	}
	
	public function check_data()
	{
	foreach($_POST as $key => $value)
	{
		if ($_POST[$key] =="") 
		{			
			$this->mErrorMessage[$key] =  $key . " is required";
		}		
    }
	}
	
	public function handle_data($lawFirmId,$lawFirmName,$address,$city,$state,$zipCode,$telephone)
	{
	Cases::AssignFirm2Claim($lawFirmId,$claimNo);

	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}	
}

?>