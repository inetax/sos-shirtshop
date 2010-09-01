{* caseinfo_form.tpl *}
{load_presentation_object filename="caseinfo" assign="obj"}
{* Start examiner add box *}
<div class="box">
  <b>Add Case Information</b>
	<form method="post" action="{$obj->mLinkToAddCaseInfo}">
	<table>
	<tr>
		<td>Plaintiff</td>
		<td><input type ="text" name="plaintiff" >
		<div class="errorMsg">{$obj->mErrorMessage.plaintiff}</td>
	</tr>
	<tr>
		<td>Plaintiff (abbrev.)</td>
		<td><input type ="text" name="plaintiff_ab" >
		<div class="errorMsg">{$obj->mErrorMessage.plaintiff_ab}</td>
	</tr>
	<tr>
		<td>Defendant</td>
		<td><input type ="text" name="defendant" >
		<div class="errorMsg">{$obj->mErrorMessage.defendant}</td>
	</tr>
	<tr>
		<td>Defendant (abbrev.)</td>
		<td><input type ="text" name="defendant_ab" >
		<div class="errorMsg">{$obj->mErrorMessage.defendant_ab}</td>
	</tr>
	<tr>
		<td>IndexNo</td>
		<td><input type ="text" name="indexNo" >
		<div class="errorMsg">{$obj->mErrorMessage.indexNo}</td>
	</tr>
	<tr>
		<td>ClaimNo</td>
		<td><input type ="text" name="claimNo" id="claimNo">
		<div class="errorMsg">{$obj->mErrorMessage.claimNo}</td>
	</tr>
	 <tr>
    <td>Date of Accident</td>
    <td><input type ="text" name="dateAccident" >
    <div class="errorMsg">{$obj->mErrorMessage.dateAccident}</td>
  </tr>
  <tr>
    <td>Policy Limit</td>
    <td><input type ="text" name="policyLimit" id="policyLimit" >
    <div class="errorMsg">{$obj->mErrorMessage.policyLimit}</td>
  </tr>
    <tr>
    <td>ExaminerID</td>
    <td><select name="examinerID">
    <option value=""></option>
    {section name=i loop=$obj->mExaminerID}  
    <option value="{$obj->mExaminerID[i].ID}">{$obj->mExaminerID[i].ID}</option>
    {/section}
  </select>
  <div class="errorMsg">{$obj->mErrorMessage.examinerID}</td>
  </tr>
    <tr>
    <td>CaseName</td>
    <td><input type ="text" name="caseName" >
    <div class="errorMsg">{$obj->mErrorMessage.caseName}</td>
  </tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>
{* End caseinfo add box *}