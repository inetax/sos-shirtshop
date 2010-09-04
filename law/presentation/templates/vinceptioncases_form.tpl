{* vmailmerge_form.tpl *}
{load_presentation_object filename="vinceptioncases" assign="obj"}
{* Start vinceptioncases box *}
<div class="box">
  <b>Update Inception Case List</b>
	<form method="post" action="{$obj->mLinkToUpdatevInceptionCases}">
	<table>
	<tr>
		<td>Start Date<br/>(yyyy-mm-dd)</td>
		<td><input type ="text" name="startDate" id="datepicker">
		<div class="errorMsg">{$obj->mErrorMessage.startDate}</div></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>
{* End vinceptioncases box *}