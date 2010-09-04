<?php
class Vinceptioncases
{
  public $mLinkToUpdatevInceptionCases;  
  public $mErrorMessage = array('startDate' => '');
  public $mErrorCount;
  
  private $_mLinkToAddSuccess; 
  
  // Class constructor
  public function __construct()
  {    
    $this->mLinkToUpdatevInceptionCases = Link::ToUpdatevInceptionCases();    
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
    
	public function handle_data($startDate)
	{
	Cases::UpdateVInceptionCases($startDate);

	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}

	// Initialize presentation object
  public function init()
  {

  	if (isset($_POST['submit']))
    { 
    $startDate=$_POST['startDate'];    
    
    $this->check_data();      
	
    if ($this->mErrorCount ==0) 		
		$this->handle_data($startDate);				
    }
  }
}