{* Smarty blank page *}

<p>Welcome to Complaint Dept.</p>

{* Start lawfirm add box *}
<div class="box">
  <b>5 Steps to a Successful Mail Merge</b>
  
  <table>
  <tr>
    <td>1</td>
    <td><a href="?view=AddExaminer">Add Claim Examiner</a></td>
    <td>{if isset($smarty.session.examiner)}<img src="images/checkmark.gif" height="30" width="42" />{/if}</td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="?view=AddCaseInfo">Add Case Info</a></td>
    <td>{if isset($smarty.session.caseinfo)}<img src="images/checkmark.gif" height="30" width="42" />{/if}</td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="?view=AddLawFirm">Add Law Firm for Plaintiff</a></td>
    <td>{if isset($smarty.session.lawfirm)}<img src="images/checkmark.gif" height="30" width="42" />{/if}</td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="?view=AssignFirm2Claim">Link Law Firm to Case</a></td>
    <td>{if isset($smarty.session.link)}<img src="images/checkmark.gif" height="30" width="42" />{/if}</td>
  </tr>
   <tr>
    <td>5</td>
    <td><a href="?view=UpdatevMailMerge">Update vMailMerge</a></td>
    <td>{if isset($smarty.session.vmailmerge)}<img src="images/checkmark.gif" height="30" width="42" />{/if}</td>
  </tr>
   <tr>
   <td colspan="3"><a href="?view=RemoveCheck">Remove Checkmarks</a></td>
   </tr>
  </table>  
  </form>
</div>
{* End lawfirm add box *}