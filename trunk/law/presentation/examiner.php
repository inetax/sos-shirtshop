<?php
class Examiner
{
	public $mLinkToValidateExaminer;
	public $mResult;	
	public $mErrorMessage = array('examinerID' => '',
        'honorific' => '',
		'examinerFirstName' => '',
		'examinerLastName' => '',
		'fax' => '');	
	public $mErrorCount;
	
	private $_mExaminerID;
	private $_mLinkToAddSuccess;
	
	// Class constructor
  public function __construct()
  {
    $this->mLinkToValidateExaminer = Link::ToValidateExaminer();
    $this->_mLinkToAddSuccess = Link::ToAddSuccess();
    $this->_mExaminerID=Cases::GetExaminersID();
    $this->mResult = Cases::GetExaminers();          	
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
		else if ($key == 'examinerID')
		{
			// Check to make sure ExaminerID is unique
    		for ($i=0;$i<count($this->_mExaminerID);$i++)
    		{
      		if (strcmp($_POST[$key], $this->_mExaminerID[$i]['ID']) == 0)
      		{
        	$this->mErrorMessage[$key]='This ID is already in database.<br/> Please choose another.';
      		++$this->mErrorCount;
      		}     		
    		}						
		}	
	}
				
	}

	public function handle_data($examiner_id,$honorific,$examiner_firstname,$examiner_lastname, $fax, $status)
	{
	Cases::AddExaminer($examiner_id,$honorific,$examiner_firstname,$examiner_lastname, $fax, $status);

	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}
	
  // Initialize presentation object
	public function init()
	{
		if (isset($_POST['submit']))
		{
				
		$examiner_id=strtoupper($_POST['examinerID']);
		$honorific=$_POST['honorific'];
		$examiner_firstname=$_POST['examinerFirstName'];
		$examiner_lastname=$_POST['examinerLastName'];
		$fax=$_POST['fax'];
		$status='A';
		$this->check_data();
		if ($this->mErrorCount ==0) 		
		{
			$this->handle_data($examiner_id,$honorific,$examiner_firstname,$examiner_lastname,$fax,$status);
		}
						
		}
	} 

	
  
}