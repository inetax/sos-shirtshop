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
    <div class="errorMsg">{$obj->mErrorMessage.lawFirmId}</td>
  </tr>
  <tr>
    <td>Law Firm Name</td>
    <td><input type ="text" name="lawFirmName" >
    <div class="errorMsg">{$obj->mErrorMessage.lawFirmName}</td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type ="text" name="address" >
    <div class="errorMsg">{$obj->mErrorMessage.address}</td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type ="text" name="city" >
    <div class="errorMsg">{$obj->mErrorMessage.city}</td>
  </tr>
   <tr>
    <td>State</td>
    <td><input type ="text" name="state" id="state">
    <div class="errorMsg">{$obj->mErrorMessage.state}</td>
  </tr>
   <tr>
    <td>Zip Code</td>
    <td><input type ="text" name="zipCode" >
    <div class="errorMsg">{$obj->mErrorMessage.zipCode}</td>
  </tr>
    <tr>
    <td>Telephone</td>
    <td><input type ="text" name="telephone" >
    <div class="errorMsg">{$obj->mErrorMessage.telephone}</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit"  name="submit" value="Save"></td>
  </tr>
  </table>  
  </form>
</div>
{* End lawfirm add box *}