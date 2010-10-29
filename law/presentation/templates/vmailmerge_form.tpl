{* vmailmerge_form.tpl *}
{load_presentation_object filename="vmailmerge" assign="obj"}
{* Start vmailmerge box *}
<div class="box">
	<form method="post" action="{$obj->mLinkToUpdateMailMerge}">
	<fieldset>
	<legend>vMailMerge</legend>
	<div>
		<label for="ClaimNo">ClaimNo</label>
		<input type ="text" name="claimNo" id="claimNo">
		<span class="errorMsg">{$obj->mErrorMessage.claimNo}</span></div>
	<div>
		<label>&nbsp;</label>
		<input type="submit"  name="submit" value="Save"></div>	
	</fieldset>	
	</form>
</div>
{* End vmailmerge box *}