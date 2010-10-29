{* examiner.tpl *}
{load_presentation_object filename="examiner" assign="obj"}
{* Start claim examiner form box *}
<div class="box">
<form method="post" action="{$obj->mLinkToValidateExaminer}">
  <fieldset>
    <legend>Claim Examiner</legend>
    <div>
      <label for="examinerID">Examiner ID</label> 
      <input type ="text" name="examinerID" id="examinerId" value="{if isset($smarty.post.examinerID)}{$smarty.post.examinerID}{/if}">
      <span class="errorMsg">{$obj->mErrorMessage.examinerID}</span>
      <span id="tips-examiner" class="hints">Examiner ID is taken.  Please choose another.</span></div>
    <div>
      <label for="honorific">Honorific</label> <input type ="text" name="honorific" id="honorific" value="{if isset($smarty.post.honorific)}{$smarty.post.honorific}{/if}">
      <span class="errorMsg">{$obj->mErrorMessage.honorific}</span>
      <span id="tip-honorific" class="hints">ex. Mr.,Ms.,Mrs.,Miss</span></div>    
    <div>
      <label for="examinerFirstName">First Name</label>
      <input type ="text" name="examinerFirstName" value="{if isset($smarty.post.examinerFirstName)}{$smarty.post.examinerFirstName}{/if}">
      <span class="errorMsg">{$obj->mErrorMessage.examinerFirstName}</span></div>
    <div>
       <label for="examinerLastName">Last Name</label>
       <input type ="text" name="examinerLastName" value="{if isset($smarty.post.examinerLastName)}{$smarty.post.examinerLastName}{/if}">
       <span class="errorMsg">{$obj->mErrorMessage.examinerLastName}</span></div>
    <div>
       <label for="fax">Fax Number</label>
       <input type ="text" name="fax" id="fax" value="{if isset($smarty.post.fax)}{$smarty.post.fax}{/if}">
       <span class="errorMsg">{$obj->mErrorMessage.fax}</span></div>
    <div>
       <label> &nbsp;</label>
       <input type="submit"  name="submit" value="Save"></div>
    <div></div>
  </fieldset>
</form>  
</div>



{* End claim examiner form box *}