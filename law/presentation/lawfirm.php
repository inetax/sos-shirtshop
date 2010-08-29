<?php 
Class Lawfirm
{
  public $mLinkToAddLawFirm;
  public $mResult;
  public $mErrorMessage;
  public $mErrorMessageID;
  public $mErrorMessageFN;
  public $mErrorMessageAD;
  public $mErrorMessageCT;
  public $mErrorMessageST;
  public $mErrorMessageZP;
  public $mErrorMessageTEL;
  
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
    
    if ($lawFirmId==null)
    {
      $this->mErrorMessageID='ID is required';
    }
    else
    {
    // Check to make sure ExaminerID is unique
    for ($i=0;$i<count($this->_mFirmID);$i++)
    {    	
      if (strcmp($lawFirmId, $this->_mFirmID[$i]['ID']) == 0) {
        $this->mErrorMessageID='This ID is already in database.<br/> Please choose another.';
     }
    } 
      
    }
    
    if ($lawFirmName==null)
      $this->mErrorMessageFN='Law Firm Name is required';      
    
    if ($address==null)
      $this->mErrorMessageAD='Address is required';
      
    if ($city==null)
      $this->mErrorMessageCT='City is required';
     
    if ($state==null)
      $this->mErrorMessageST='State is required';      
    
    if ($zipCode==null)
      $this->mErrorMessageZP='Zip Code is required';
      
    if ($telephone==null)
      $this->mErrorMessageTEL='Telephone No is required';
    
    $this->mErrorMessage = $this->mErrorMessageID . $this->mErrorMessageFN . $this->mErrorMessageAD. $this->mErrorMessageCT . $this->mErrorMessageST . $this->mErrorMessageZP . $this->mErrorMessageTEL;
    
    if ($this->mErrorMessage == null)
    {
      Cases::AddLawFirm($lawFirmId,$lawFirmName,$address,$city,$state,$zipCode,$telephone);

      header('Location: ' . 
        htmlspecialchars_decode(
          $this->mLinkToAddSuccess));
    }
    }
	}
}
?>