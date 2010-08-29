{* lawfirm_form.tpl *}
{load_presentation_object filename="lawfirm" assign="obj"}
{* Start lawfirm add box *}
<div class="box">
  <b>Add Law Firm</b>
  <form method="post" action="{$obj->mLinkToAddLawFirm}">
  <table>
  <tr>
    <td>ID</td>
    <td><input type ="text" name="lawFirmId" id="lawFirmId">
    <div class="errorMsg">{$obj->mErrorMessageID}</td>
  </tr>
  <tr>
    <td>Law Firm Name</td>
    <td><input type ="text" name="lawFirmName" >
    <div class="errorMsg">{$obj->mErrorMessageFN}</td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type ="text" name="address" >
    <div class="errorMsg">{$obj->mErrorMessageAD}</td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type ="text" name="city" >
    <div class="errorMsg">{$obj->mErrorMessageCT}</td>
  </tr>
   <tr>
    <td>State</td>
    <td><input type ="text" name="state" id="state">
    <div class="errorMsg">{$obj->mErrorMessageST}</td>
  </tr>
   <tr>
    <td>Zip Code</td>
    <td><input type ="text" name="zipCode" >
    <div class="errorMsg">{$obj->mErrorMessageZP}</td>
  </tr>
    <tr>
    <td>Telephone</td>
    <td><input type ="text" name="telephone" >
    <div class="errorMsg">{$obj->mErrorMessageTEL}</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit"  name="submit" value="Save"></td>
  </tr>
  </table>  
  </form>
</div>
{* End lawfirm add box *}