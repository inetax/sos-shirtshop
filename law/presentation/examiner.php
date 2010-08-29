<?php
class Examiner
{
	public $mLinkToValidateExaminer;
	public $mResult;	
	public $mErrorMessage;
	public $mErrorMessageID;
	public $mErrorMessageHN;
	public $mErrorMessageFN;
	public $mErrorMessageLN;
	
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
  
  // Initialize presentation object
	public function init()
	{
		if (isset($_POST['submit']))
		{
		$examiner_id=strtoupper($_POST['examinerID']);
		$honorific=$_POST['honorific'];
		$examiner_firstname=$_POST['examinerFirstName'];
		$examiner_lastname=$_POST['examinerLastName'];
		
				
		if ($examiner_id==null)
		{
			$this->mErrorMessageID='Examiner ID is required';
		}
		else
		{
		// Check to make sure ExaminerID is unique
    for ($i=0;$i<count($this->_mExaminerID);$i++)
    {
      if (strcmp($examiner_id, $this->_mExaminerID[$i]['ID']) == 0) {
        $this->mErrorMessageID='This ID is already in database.<br/> Please choose another.';
     }
    }	
			
		}
		
		if ($honorific==null)
			$this->mErrorMessageHN='Examiner Honorific is required';			
		
			if ($examiner_firstname==null)
			$this->mErrorMessageFN='Examiner First Name is required';
			
		if ($examiner_lastname==null)
			$this->mErrorMessageLN='Examiner Last Name is required';
		
		$this->mErrorMessage = $this->mErrorMessageID . $this->mErrorMessageHN . $this->mErrorMessageFN. $this->mErrorMessageLN;
		
		if ($this->mErrorMessage == null)
		{
			Cases::AddExaminer($examiner_id,$honorific,$examiner_firstname,$examiner_lastname);

			header('Location: ' . 
				htmlspecialchars_decode(
					$this->_mLinkToAddSuccess));
		}
		}
	} 	 
  
}