<?php
class Caseinfo
{
  public $mLinkToAddCaseInfo;
  public $mExaminerID;
  public $mResult;
  public $mErrorMessage;
  public $mErrorMessageEID;
  public $mErrorMessageCN;
  public $mErrorMessageCL;
  public $mErrorMessagePL;
  public $mErrorMessagePT;
  public $mErrorMessageDE;
  public $mErrorMessagePTAB;
  public $mErrorMessageDEAB;
  public $mErrorMessageIN;
  public $mErrorMessageDA;
  
  private $_mLinkToAddSuccess; 
  
  // Class constructor
  public function __construct()
  {    
    $this->mLinkToAddCaseInfo = Link::ToValidateCaseInfo();    
    $this->_mLinkToAddSuccess = Link::ToAddSuccess();
    $this->mExaminerID = Cases::GetExaminersID();
    $this->mResult = Cases::GetCasesInfo();
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
    
    if ($plaintiff==null)
      $this->mErrorMessagePT='Plaintiff is required';
    
    if ($defendant==null)
      $this->mErrorMessageDE='Defendants is required';

    if ($plaintiff==null)
      $this->mErrorMessagePTAB='Plaintiff abbrev. is required';
    
    if ($defendants==null)
      $this->mErrorMessageDEAB='Defendants abbrev. is required';
    
    if ($indexNo==null)
      $this->mErrorMessageIN='Index No is required';
      
    if ($claimNo==null)
      $this->mErrorMessageCL='Claim No is required';
     
    if ($dateAccident==null)
      $this->mErrorMessageDA='Date of Accident is required';      
    
    if ($examinerID==null)
      $this->mErrorMessageEID='Claim Examiner ID is required';
      
    if ($caseName==null)
      $this->mErrorMessageCN='Case Name is required';
    
    $this->mErrorMessage = $this->mErrorMessagePL . $this->mErrorMessageDE . $this->mErrorMessageIN. $this->mErrorMessageCL . $this->mErrorMessageDA . $this->mErrorMessageEID . $this->mErrorMessageCN;
    
    if ($this->mErrorMessage == null)
    {
      Cases::AddCaseInfo($plaintiff,$defendant,$indexNo,$claimNo,$dateAccident,$policyLimit, $examinerID,$plaintiff_ab, $defendant_ab, $caseName);

      header('Location: ' . 
        htmlspecialchars_decode(
          $this->_mLinkToAddSuccess));
    }
    }
  }    
  
}