{* lawfirm2claim_form.tpl *}
{load_presentation_object filename="lawfirm2claim" assign="obj"}
{* Start lawfirm add box *}

<div class="box">  
  <form method="post" action="{$obj->mLinkToAssignFirm2Claim}">
  <fieldset>
  <legend>Law Firm Assignment</legend>
  <div>
    <label for="Law Firm ID">Law Firm ID</label>
    <input type ="text" name="lawFirmId" id="lawFirmId" value="{if isset($smarty.post.lawFirmId)}{$smarty.post.lawFirmId}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.lawFirmId}</span></div>
  <div>
    <label for="Claim No">Claim No</label>
    <input type ="text" name="claimNo" id="claimNo" value="{if isset($smarty.post.claimNo)}{$smarty.post.claimNo}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.claimNo}</span></div>  
  <div>
    <label>&nbsp;</label>
    <input type="submit"  name="submit" value="Save"></div>
  </fieldset>  
  </form>
</div>
{* End lawfirm add box *}