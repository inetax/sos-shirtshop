{* lawfirm2claim_form.tpl *}
{load_presentation_object filename="lawfirm2claim" assign="obj"}
{* Start lawfirm add box *}

<div class="box">
  <b>Add Law Firm</b>
  <form method="post" action="{$obj->mLinkToAssignFirm2Claim}">
  <table>
  <tr>
    <td>Law Firm ID</td>
    <td><input type ="text" name="lawFirmId" id="lawFirmId">
    <div class="errorMsg">{$obj->mErrorMessage.lawFirmId}</td>
  </tr>
  <tr>
    <td>Claim No</td>
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
{* End lawfirm add box *}