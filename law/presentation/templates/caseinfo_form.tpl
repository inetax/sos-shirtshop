{* caseinfo_form.tpl *}
{load_presentation_object filename="caseinfo" assign="obj"}
{* Start examiner add box *}
<div class="box">
  <b>Add Case Information</b>
	<form method="post" action="{$obj->mLinkToAddCaseInfo}">
	<table>
	<tr>
		<td>Plaintiff<br/>(ALL CAPS)</td>
		<td><input type ="text" name="plaintiff" value="{if isset($smarty.post.plaintiff)}{$smarty.post.plaintiff}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.plaintiff}</div></td>
	</tr>
	<tr>
		<td>Plaintiff (abbrev.)<br/>(Master Case List)</td>
		<td><input type ="text" name="plaintiff_ab" value="{if isset($smarty.post.plaintiff_ab)}{$smarty.post.plaintiff_ab}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.plaintiff_ab}</div></td>
	</tr>
	<tr>
		<td>Defendant<br/>(ALL CAPS)</td>
		<td><input type ="text" name="defendant" value="{if isset($smarty.post.defendant)}{$smarty.post.defendant}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.defendant}</div></td>
	</tr>
	<tr>
		<td>Defendant (abbrev.)<br/>(Master Case List)</td>
		<td><input type ="text" name="defendant_ab" value="{if isset($smarty.post.defendant_ab)}{$smarty.post.defendant_ab}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.defendant_ab}</div></td>
	</tr>
	<tr>
		<td>Client<br/>(ALL CAPS)</td>
		<td><input type ="text" name="client" value="{if isset($smarty.post.client)}{$smarty.post.client}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.client}</div></td>
	</tr>
	<tr>
		<td>IndexNo</td>
		<td><input type ="text" name="indexNo" value="{if isset($smarty.post.indexNo)}{$smarty.post.indexNo}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.indexNo}</div></td>
	</tr>
	<tr>
		<td>ClaimNo</td>
		<td><input type ="text" name="claimNo" id="claimNo" value="{if isset($smarty.post.claimNo)}{$smarty.post.claimNo}{/if}">
		<div class="errorMsg">{$obj->mErrorMessage.claimNo}</div></td>
	</tr>
	 <tr>
    <td>Date of Accident</td>
    <td><input type ="text" name="dateAccident" value="{if isset($smarty.post.dateAccident)}{$smarty.post.dateAccident}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.dateAccident}</div></td>
  </tr>
  <tr>
    <td>Policy Limit</td>
    <td><input type ="text" name="policyLimit" id="policyLimit" value="{if isset($smarty.post.policyLimit)}{$smarty.post.policyLimit}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.policyLimit}</div></td>
  </tr>
    <tr>
    <td>ExaminerID</td>
    <td><select name="examinerID">
    <option value=""></option>
    {section name=i loop=$obj->mExaminerID}  
    <option value="{$obj->mExaminerID[i].ID}" {if isset($smarty.post.examinerID) && ($obj->mExaminerID[i].ID==$smarty.post.examinerID)}selected{/if}>{$obj->mExaminerID[i].ID}</option>
    {/section}
  </select>
  <div class="errorMsg">{$obj->mErrorMessage.examinerID}</div></td>
  </tr>
    <tr>
    <td>CaseName</td>
    <td><input type ="text" name="caseName" value="{if isset($smarty.post.caseName)}{$smarty.post.caseName}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.caseName}</div></td>
  </tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>
{* End caseinfo add box *}