<?php
// Business tier class for reading product catalog information
class Cases
{
// Retrieves all Claim Examiners
  public static function GetExaminers()
  {
    // Build the SQL Query
    $sql = 'CALL cases_get_examiners()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
// Retrieves all Examiner ID
  public static function GetExaminersID()
  {
    // Build the SQL Query
    $sql = 'CALL cases_get_examinersID()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
// Retrieves all Claim Examiners
  public static function GetCasesInfo()
  {
    // Build the SQL Query
    $sql = 'CALL cases_get_casesinfo()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
// Retrieves all Claim Examiners
  public static function GetLawFirms()
  {
    // Build the SQL Query
    $sql = 'CALL cases_get_lawfirms()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
  public static function GetLawFirmId() 
  {
     // Build the SQL Query
    $sql = 'CALL cases_get_lawfirmIds()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
  public static function GetClaimNo()
  {
     // Build the SQL Query
    $sql = 'CALL cases_get_claimno()';
    
    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
	
	
	
	// Adds Claim Examiner
	public static function AddExaminer($examinerId,$honorific, $examinerFirstName,
										$examinerLastName,$fax, $status)
	{
		// Build the SQL Query
		$sql = 'CALL cases_add_examiner(:ID,:Honorific,:ExaminerFirstName,:ExaminerLastName,:Fax, :Status)';
		
		// Build the parameters array
		$params = array(':ID' => $examinerId,
						':Honorific' => $honorific,
						':ExaminerFirstName' => $examinerFirstName,
						':ExaminerLastName' => $examinerLastName,
						':Fax' => $fax,
						':Status' => $status);
		// Execute the query
		DatabaseHandler::Execute($sql,$params);
	}
	
// Adds Case Info
  public static function AddCaseInfo($plaintiff,$defendants, $client, $indexNo,
                    $claimNo, $dateAccident, $policyLimit, $examinerID,$plaintiff_ab, $defendant_ab, $caseName)
  {
    // Build the SQL Query
    $sql = 'CALL cases_add_caseinfo(:Plaintiff,:Defendants,:Client,:IndexNo,:ClaimNo,:DateAccident,:PolicyLimit,:ExaminerID,:PlaintiffAB,:DefendantAB,:CaseName, :TimeCreated)';
    
    // Build the parameters array
    $params = array(':Plaintiff' => $plaintiff,
                     ':Defendants' => $defendants,
                     ':Client' => $client,
                     ':IndexNo' => $indexNo,
                     ':ClaimNo' => $claimNo,
                     ':DateAccident' => $dateAccident,
    				 ':PolicyLimit' => $policyLimit,
                     ':ExaminerID' => $examinerID,
    				 ':PlaintiffAB' =>$plaintiff_ab, 
    				 ':DefendantAB' =>$defendant_ab,
                     ':CaseName'=>$caseName,
    				 ':TimeCreated'=>date("Y-m-d h:i:s"));
    // Execute the query
    DatabaseHandler::Execute($sql,$params);
  }
	
  // Adds Law Firm
  public static function AddLawFirm($lawFirmId,$LawFirmName,$address,
                                    $city,$state, $zipCode,$telephone)
  {
    // Build the SQL Query
    $sql = 'CALL cases_add_lawfirm(:Id,:lawFirmName,:Address,:City,:State, :ZipCode,:Telephone)';
    
    // Build the parameters array
    $params = array(':Id' => $lawFirmId,
                     ':lawFirmName' => $LawFirmName,
                     ':Address' => $address,
                     ':City' => $city,
                     ':State' => $state,
                     ':ZipCode'=> $zipCode,
                     ':Telephone'=>$telephone);
    // Execute the query
    DatabaseHandler::Execute($sql,$params);
  }
  
 // Adds Law Firm
  public static function AssignFirm2Claim($lawFirmId,$claimNo)
  {
    // Build the SQL Query
    $sql = 'CALL cases_assign_firm2claim(:Id,:ClaimNo)';
    
    // Build the parameters array
    $params = array(':Id' => $lawFirmId,
                     ':ClaimNo' => $claimNo);
    // Execute the query
    DatabaseHandler::Execute($sql,$params);
  }
  
// Update VMailMerge
	public static function UpdateVMailMerge($claimNo)
	{
		// Build the SQL Query
		$sql = 'CALL cases_create_vmailmerge(:ClaimNo)';
		
		// Build the parameters array
		$params = array(':ClaimNo' => $claimNo);
		// Execute the query
		DatabaseHandler::Execute($sql,$params);
	}
	
// Update VInception Cases
  public static function UpdateVInceptionCases($startDate)
  {
    // Build the SQL Query
    $sql = 'CALL cases_create_vinceptioncases(:StartDate)';
    
    // Build the parameters array
    $params = array(':StartDate' => $startDate);
    // Execute the query
    DatabaseHandler::Execute($sql,$params);
  }
  
}
?>
