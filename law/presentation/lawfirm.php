<?php 
Class Lawfirm
{
  public $mLinkToAddLawFirm;
  public $mResult;
  public $mErrorMessage = array('lawFirmId' => '',
        'lawFirmName' => '',
		'address' => '',
		'city' => '',
  		'state' => '',
		'zipCode' => '',
  		'telephone' => '');
  
  private $_mFirmID;
  private $_mLinkToAddSuccess;
  
	public function __construct()
	{
		$this->mLinkToAddLawFirm = Link::ToValidateLawFirm();
		$this->mLinkToAddSuccess = Link::ToAddSuccess();
		$this->_mFirmID = Cases::GetLawFirmId();
		$this->mResult = Cases::GetLawFirms();
	}
	
	public function init()
	{
	  if (isset($_POST['submit']))
    {
   
    $lawFirmId=$_POST['lawFirmId'];
    $lawFirmName=$_POST['lawFirmName'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipCode=$_POST['zipCode'];
    $telephone=$_POST['telephone'];
    
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
		else if ($key == 'lawFirmId')
    	{
    	// Check to make sure ExaminerID is unique
    	for ($i=0;$i<count($this->_mFirmID);$i++)
    	{    	
      		if (strcmp($_POST[$key], $this->_mFirmID[$i]['ID']) == 0) 
        		$this->mErrorMessage['lawFirmId']='This ID is already in database.<br/> Please choose another.';
    	} 			
		}
    }
	}
    
	public function handle_data($lawFirmId,$lawFirmName,$address,$city,$state,$zipCode,$telephone)
	{
	Cases::AddLawFirm($lawFirmId,$lawFirmName,$address,$city,$state,$zipCode,$telephone);

	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}  
}
?>