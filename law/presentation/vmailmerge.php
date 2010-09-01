<?php
class VmailMerge
{
  public $mLinkToUpdateMailMerge;  
  public $mErrorMessage = array('claimNo' => '');
  
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
    
    $this->check_data();      

    if (count($this->mErrorMessage) ==0) 		
		$this->handle_data($claimNo);
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
    
	public function handle_data($claimNo)
	{
	Cases::UpdateVMailMerge($claimNo);

	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}		    
}