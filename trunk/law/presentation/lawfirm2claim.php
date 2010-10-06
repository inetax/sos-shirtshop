<?php 
Class Lawfirm2claim
{
 	public $mLinkToAssignFirm2Claim;
	public $mErrorMessage = array('lawFirmId' => '',
        'claimNo' => '');
	public $mErrorCount;
   	private $_mLinkToAddSuccess;
   	
	public function __construct()
	{
		$this->mLinkToAssignFirm2Claim=Link::ToAssignFirm2Claim();
		$this->_mLinkToAddSuccess = Link::ToAddSuccess();		
	}
			
	public function check_data()
	{
	foreach($_POST as $key => $value)
	{
		if ($_POST[$key] =="") 
		{			
			$this->mErrorMessage[$key] =  $key . " is required";
			++$this->mErrorCount;
		}		
    }
	}
	
	public function handle_data($lawFirmId,$claimNo)
	{
	Cases::AssignFirm2Claim($lawFirmId,$claimNo);
	$_SESSION['link']=1;
	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}

	public function init()
	{
	 if (isset($_POST['submit']))
    {
   
    $lawFirmId=$_POST['lawFirmId'];
    $claimNo=$_POST['claimNo'];
    
    $this->check_data();      

    if ($this->mErrorCount ==0) 		
		$this->handle_data($lawFirmId,$claimNo);
    }
	}
}

?>