{* lawfirm_form.tpl *}
{load_presentation_object filename="lawfirm" assign="obj"}
{* Start lawfirm add box *}
<div class="box">
  <b>Add Law Firm</b>
  <form method="post" action="{$obj->mLinkToAddLawFirm}" name="ss">
  <table>
  <tr>
    <td>ID</td>
    <td><input type ="text" name="lawFirmId" id="lawFirmId" value="{if isset($smarty.post.lawFirmId)}{$smarty.post.lawFirmId}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.lawFirmId}</div></td>
  </tr>
  <tr>
    <td>Law Firm Name</td>
    <td><input type ="text" name="lawFirmName" value="{if isset($smarty.post.lawFirmName)}{$smarty.post.lawFirmName}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.lawFirmName}</div></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type ="text" name="address" value="{if isset($smarty.post.address)}{$smarty.post.address}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.address}</div></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type ="text" name="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.city}</div></td>
  </tr>
   <tr>
    <td>State</td>
    <td><input type ="text" name="state" id="state" value="{if isset($smarty.post.state)}{$smarty.post.state}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.state}</div></td>
  </tr>
   <tr>
    <td>Zip Code</td>
    <td><input type ="text" name="zipCode" value="{if isset($smarty.post.zipCode)}{$smarty.post.zipCode}{/if}">
    <div class="errorMsg">{$obj->mErrorMessage.zipCode}</div></td>
  </tr>
    <tr>
    <td>Telephone</td>
    <td><input type ="text" name="telephone" value="{if isset($smarty.post.telephone)}{$smarty.post.telephone}{/if}"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit"  name="submit" value="Save"></td>
  </tr>
  </table>  
  </form>
</div>
{* End lawfirm add box *}