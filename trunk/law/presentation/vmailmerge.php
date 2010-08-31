<?php
class VmailMerge
{
  public $mLinkToUpdateMailMerge;  
  public $mErrorMessage;  
  public $mErrorMessageCL;
  
  private $_mLinkToAddSuccess; 
  
  // Class constructor
  public function __construct()
  {    
    $this->mLinkToUpdateMailMerge = Link::ToUpdatevMailMerge();    
    $this->_mLinkToAddSuccess = Link::ToAddSuccess();   
  }
  
  // Initialize presentation object
  public function init()
  {

  	if (isset($_POST['submit']))
    { 
    $claimNo=$_POST['claimNo'];    
         
    if ($claimNo==null)
      $this->mErrorMessageCL='Claim No is required';     
    
    $this->mErrorMessage = $this->mErrorMessageCL;
    
    if ($this->mErrorMessage == null)
    {
      Cases::UpdateVMailMerge($claimNo);

      header('Location: ' . 
        htmlspecialchars_decode(
          $this->_mLinkToAddSuccess));
    }
    }
  }    
  
}