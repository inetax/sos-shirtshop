<?php
class VmailMerge
{
  public $mLinkToUpdateMailMerge;  
  public $mErrorMessage = array('claimNo' => '');
  public $mErrorCount;
  private $_mLinkToAddSuccess; 
  
  // Class constructor
  public function __construct()
  {    
    $this->mLinkToUpdateMailMerge = Link::ToUpdatevMailMerge();    
    $this->_mLinkToAddSuccess = Link::ToAddSuccess();   
  }
  
    public function check_data()
	{
	foreach($_POST as $key => $value)
	{
		if ($_POST[$key] =='') 
		{			
			$this->mErrorMessage[$key] =  $key . " is required";
			++$this->mErrorCount;
		}		
    }
	}
    
	public function handle_data($claimNo)
	{
	Cases::UpdateVMailMerge($claimNo);
	$_SESSION['vmailmerge']=1;
	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}

// Initialize presentation object
  public function init()
  {

  	if (isset($_POST['submit']))
    { 
    $claimNo=$_POST['claimNo'];    
    
    $this->check_data();      

    if ($this->mErrorCount ==0) 		
		$this->handle_data($claimNo);
    }
  }
}