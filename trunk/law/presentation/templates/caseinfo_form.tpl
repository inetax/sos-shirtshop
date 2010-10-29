{* caseinfo_form.tpl *}
{load_presentation_object filename="caseinfo" assign="obj"}
{* Start examiner add box *}
<div class="box">
	<form method="post" action="{$obj->mLinkToAddCaseInfo}">
	<fieldset>
    <legend>Case Information</legend>
    <div>
    <label for="Case Name">Case Name</label>
    <input type ="text" name="caseName" value="{if isset($smarty.post.caseName)}{$smarty.post.caseName}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.caseName}</span></div>
	<div>
		<label for="Plaintiff(s)">Plaintiff(s)</label>
		<input type ="text" name="plaintiff" id="plaintiff" value="{if isset($smarty.post.plaintiff)}{$smarty.post.plaintiff}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.plaintiff}</span>
		<span id="tip-plaintiff-docheading" class="hints">All upper case as in document heading</span></div>
	<div>
		<label for="Plaintiff (Case List)">Plaintiff(s)<br/>(Case List)</label>
		<input type ="text" name="plaintiff_ab" id="plaintiff_ab" value="{if isset($smarty.post.plaintiff_ab)}{$smarty.post.plaintiff_ab}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.plaintiff_ab}</span>
		<span id="tip-plaintiff-list" class="hints">ex. Last Name, First Name, et al</span></div>	
	<div>
		<label for="Defendant(s)">Defendant(s)</label>
		<input type ="text" name="defendant" id="defendant" value="{if isset($smarty.post.defendant)}{$smarty.post.defendant}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.defendant}</span>
		<span id="tip-defendant-docheading" class="hints">All upper case as in document heading</span></div>
	<div>
		<label for="Defendant (Case List)">Defendant(s)<br/>(Case List)</label>
		<input type ="text" name="defendant_ab" id="defendant_ab" value="{if isset($smarty.post.defendant_ab)}{$smarty.post.defendant_ab}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.defendant_ab}</span>
		<span id="tip-defendant-list" class="hints">ex. Last Name, First Name, et al</span></div>
	<div>
		<label for="Client(s)">Client(s)</label>
		<input type ="text" name="client" id="client" value="{if isset($smarty.post.client)}{$smarty.post.client}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.client}</span>
		<span id="tip-client" class="hints">Defendant(s) represented by this office.  Upper case</span></div>
	<div>
		<label for="Index No">Index No</label>
		<input type ="text" name="indexNo" value="{if isset($smarty.post.indexNo)}{$smarty.post.indexNo}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.indexNo}</span></div>
	<div>
		<label for="Claim No">Claim No</label>
		<input type ="text" name="claimNo" id="claimNo" value="{if isset($smarty.post.claimNo)}{$smarty.post.claimNo}{/if}">
		<span class="errorMsg">{$obj->mErrorMessage.claimNo}</span></div>
	 <div>
    <label for="Date of Accident">Date of Accident</label>
    <input type ="text" name="dateAccident" value="{if isset($smarty.post.dateAccident)}{$smarty.post.dateAccident}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.dateAccident}</span></div>
  <div>
    <label for="Policy Limit">Policy Limit</label>
    <input type ="text" name="policyLimit" id="policyLimit" value="{if isset($smarty.post.policyLimit)}{$smarty.post.policyLimit}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.policyLimit}</span></div>
  <div>
    <label for="Examiner ID">Examiner ID</label>
    <select name="examinerID">
    <option value=""></option>
    {section name=i loop=$obj->mExaminerID}  
    <option value="{$obj->mExaminerID[i].ID}" {if isset($smarty.post.examinerID) && ($obj->mExaminerID[i].ID==$smarty.post.examinerID)}selected{/if}>{$obj->mExaminerID[i].ID}</option>
    {/section}
  </select>
  <span class="errorMsg">{$obj->mErrorMessage.examinerID}</span></div>    
	<div>
		<label>&nbsp;</label>
		<input type="submit"  name="submit" value="Save"></div>
	</fieldset>	
	</form>
</div>
{* End caseinfo add box *}