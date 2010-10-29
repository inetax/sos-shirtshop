{* lawfirm_form.tpl *}
{load_presentation_object filename="lawfirm" assign="obj"}
{* Start lawfirm add box *}
<div class="box">
  <form method="post" action="{$obj->mLinkToAddLawFirm}">
 <fieldset>
    <legend>Law Firm</legend>
 <div>
    <label for="ID">ID</label> 
    <input type ="text" name="lawFirmId" id="lawFirmId" value="{if isset($smarty.post.lawFirmId)}{$smarty.post.lawFirmId}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.lawFirmId}</span></div>
  <div>
    <label for="Law Firm Name">Law Firm</label>
    <input type ="text" name="lawFirmName" value="{if isset($smarty.post.lawFirmName)}{$smarty.post.lawFirmName}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.lawFirmName}</span></div>
  <div>
    <label for="Address">Address</label> 
    <input type ="text" name="address" value="{if isset($smarty.post.address)}{$smarty.post.address}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.address}</span></div>
  <div>
    <label for="City">City</label>
    <input type ="text" name="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.city}</span></div>
   <div>
    <label for="State">State</label>
    <input type ="text" name="state" id="state" value="{if isset($smarty.post.state)}{$smarty.post.state}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.state}</span></div>
   <div>
    <label for="Zip Code">Zip Code</label>
    <input type ="text" name="zipCode" value="{if isset($smarty.post.zipCode)}{$smarty.post.zipCode}{/if}">
    <span class="errorMsg">{$obj->mErrorMessage.zipCode}</span></div>
    <div>
    <label for="Telephone">Telephone</label>
    <input type ="text" name="telephone" id="telephone" value="{if isset($smarty.post.telephone)}{$smarty.post.telephone}{/if}"></div>
  <div>
    <label for="">&nbsp;</label>
    <input type="submit"  name="submit" value="Save"></div>
    </fieldset>
  </form>
</div>
{* End lawfirm add box *}