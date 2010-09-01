{* vmailmerge_form.tpl *}
{load_presentation_object filename="vmailmerge" assign="obj"}
{* Start vmailmerge box *}
<div class="box">
  <b>Update vMailMerge</b>
	<form method="post" action="{$obj->mLinkToUpdateMailMerge}">
	<table>
	<tr>
		<td>ClaimNo</td>
		<td><input type ="text" name="claimNo" id="claimNo">
		<div class="errorMsg">{$obj->mErrorMessage.claimNo}</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>
{* End vmailmerge box *}