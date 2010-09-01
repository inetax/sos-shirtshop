{* examiner.tpl *}
{load_presentation_object filename="examiner" assign="obj"}
{* Start claim examiner form box *}
<div class="box">
  <b>Add Claim Examiner</b>
	<form method="post" action="{$obj->mLinkToValidateExaminer}">
	<table>
	<tr>
		<td>Examiner ID</td>
		<td><input type ="text" name="examinerID" id="examinerId">
		<div class="errorMsg">{$obj->mErrorMessage.examinerID}</div></td>
	</tr>
	<tr>
		<td>Honorific</td>
		<td><input type ="text" name="honorific" id="honorific"><div class="errorMsg">{$obj->mErrorMessage.honorific}</div</td>
	</tr>
	<tr>
		<td>Examiner First Name</td>
		<td><input type ="text" name="examinerFirstName" ><div class="errorMsg">{$obj->mErrorMessage.examinerFirstName}</div</td>
	</tr>
	<tr>
		<td>Examiner Last Name</td>
		<td><input type ="text" name="examinerLastName" ><div class="errorMsg">{$obj->mErrorMessage.examinerLastName}</div</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>
{* End claim examiner form box *}