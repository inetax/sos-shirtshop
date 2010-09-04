<?php
class Gui
{
  public $mSiteUrl;
  // Define the template file for the page contents
  public $mContentsCell = 'blank.tpl';
 
  // Class constructor
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');
  }

  // Initialize presentation object
  public function init()
  {
   
    // Load department details if visiting a department
    if (isset ($_GET['view']))
    {
    	    	
    switch ($_GET['view']) {
    case "AddExaminer":
        $this->mContentsCell = 'examiner_form.tpl';
        break;
    case "AddSuccess":
        $this->mContentsCell = 'confirm.tpl';
       break;
    case "AddCaseInfo":
        $this->mContentsCell = 'caseinfo_form.tpl';
        break;
    case "AddLawFirm":
        $this->mContentsCell = 'lawfirm_form.tpl';
       break;
    case "AssignFirm2Claim":
        $this->mContentsCell = 'lawfirm2claim_form.tpl';
       break;
    case "UpdatevInceptionCases":
        $this->mContentsCell = 'vinceptioncases_form.tpl';
       break;
    case "UpdatevMailMerge":
        $this->mContentsCell = 'vmailmerge_form.tpl';
       break;
    case "CasesInfo":
        $this->mContentsCell = 'caseinfo_view.tpl';
        break;  
    case "ClaimExaminer":
        $this->mContentsCell = 'examiner_view.tpl';
        break;
    case "ClaimNo":
        $this->mContentsCell = 'claim_no.tpl';
        break;    
    case "FirmId":
        $this->mContentsCell = 'firm_id.tpl';
        break;  
    case "LawFirms":
        $this->mContentsCell = 'lawfirm_view.tpl';
        break;      
	}
    }
    
  }
}
?>