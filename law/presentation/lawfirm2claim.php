<?php 
Class Lawfirm2claim
{
  //public $mlawFirmID;
  //public $mclaimNo;
  public $mErrorMessageID;
  public $mErrorMessageCL;
  public $mLinkToAssignFirm2Claim;	
  
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
    
    if ($lawFirmId==null)
      $this->mErrorMessageID='ID is required';
    
    if ($claimNo==null)
      $this->mErrorMessageCL='Claim No is required';      
    
    
    $this->mErrorMessage = $this->mErrorMessageID . $this->mErrorMessageCL;
    
    if ($this->mErrorMessage == null)
    {
      Cases::AssignFirm2Claim($lawFirmId,$claimNo);

      header('Location: ' . 
        htmlspecialchars_decode(
          $this->mLinkToAddSuccess));
    }
    }  
	}
}

?>