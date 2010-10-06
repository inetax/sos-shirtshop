<?php
class Caseinfo
{
  public $mLinkToAddCaseInfo;
  public $mResult;
  public $mExaminerID;  
  public $mErrorMessage = array('plaintiff' => '',
        'plaintiff_ab' => '',
		'defendant' => '',
		'defendant_ab' => '',
  		'indexNo' => '',
		'claimNo' => '',
  		'dateAccident' => '',
		'policyLimit' => '',
  		'examinerID' => '',
		'caseName' => '');
  public $mErrorCount;
    
  private $_mLinkToAddSuccess; 
  
  // Class constructor
  public function __construct()
  {    
    $this->mLinkToAddCaseInfo = Link::ToValidateCaseInfo();    
    $this->_mLinkToAddSuccess = Link::ToAddSuccess();
    $this->mExaminerID = Cases::GetExaminersID();
    $this->mResult = Cases::GetCasesInfo();
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

	public function handle_data($plaintiff,$defendant,$indexNo,$claimNo,$dateAccident,$policyLimit, $examinerID,$plaintiff_ab, $defendant_ab, $caseName)
	{
	Cases::AddCaseInfo($plaintiff,$defendant,$indexNo,$claimNo,$dateAccident,$policyLimit, $examinerID,$plaintiff_ab, $defendant_ab, $caseName);
	$_SESSION['caseinfo']=1;
	header('Location: ' . htmlspecialchars_decode($this->_mLinkToAddSuccess));
	}
	
  // Initialize presentation object
  public function init()
  {

  	if (isset($_POST['submit']))
    {
   
    $plaintiff=$_POST['plaintiff'];
    $defendant=$_POST['defendant'];
    $plaintiff_ab=$_POST['plaintiff_ab'];
    $defendant_ab=$_POST['defendant_ab'];
    $indexNo=$_POST['indexNo'];
    $claimNo=$_POST['claimNo'];
    $dateAccident=$_POST['dateAccident'];
    $policyLimit=$_POST['policyLimit'];
    $examinerID=$_POST['examinerID'];
    $caseName=$_POST['caseName'];
    
    $this->check_data();
	
    if ($this->mErrorCount ==0) 		
		$this->handle_data($plaintiff,$defendant,$indexNo,$claimNo,$dateAccident,$policyLimit, $examinerID,$plaintiff_ab, $defendant_ab, $caseName);
	
	}    
  }
}