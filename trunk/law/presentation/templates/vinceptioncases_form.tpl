{* vmailmerge_form.tpl *}
{load_presentation_object filename="vinceptioncases" assign="obj"}
{* Start vinceptioncases box *}
<div class="box">
	<form method="post" action="{$obj->mLinkToUpdatevInceptionCases}">
	<fieldset>
	<legend>vInceptionCases</legend>
	<div>
		<label for="Start Date">Start Date</label>
		<input type ="text" name="startDate" id="datepicker">
		<span class="errorMsg">{$obj->mErrorMessage.startDate}</span></div>	
	<div>
		<label>&nbsp;</label>
		<input type="submit"  name="submit" value="Save"></div>
	</fieldset>	
	</form>
</div>
{* End vinceptioncases box *}