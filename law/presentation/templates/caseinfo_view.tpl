{* caseinfo_view.tpl *}
{load_presentation_object filename="caseinfo" assign="obj"}

<b>All Cases Information</b>
{if $obj->mResult}
<table id="tableView">
<thead>
<tr>
  <th width="100">Plaintiff</th>
  <th width="100">Defendant</th>
  <th width="100">IndexNo</th>
  <th width="100">ClaimNo</th>
  <th width="100">DateAccident</th>
  <th width="100">PolicyLimit</th>
  <th width="100">ExaminerID</th>
  <th width="100">PlaintiffAB</th>
  <th width="100">DefendantAB</th>
  <th width="100">CaseName</th>
  <th width="100">TimeCreated</th>
</tr>
</thead>
<tbody>
  {section name=k loop=$obj->mResult}
  <tr>
    <td>{$obj->mResult[k].Plaintiff}</td>
    <td>{$obj->mResult[k].Defendant}</td>
    <td>{$obj->mResult[k].IndexNo}</td>
    <td>{$obj->mResult[k].ClaimNo}</td>
    <td>{$obj->mResult[k].DateAccident}</td>
    <td>{$obj->mResult[k].PolicyLimit}</td>
    <td>{$obj->mResult[k].ExaminerID}</td>
    <td>{$obj->mResult[k].PlaintiffAB}</td>
    <td>{$obj->mResult[k].DefendantAB}</td>
    <td>{$obj->mResult[k].CaseName}</td>
    <td>{$obj->mResult[k].TimeCreated}</td>    
    </tr>
  {/section}
</tbody>  
 </table>
{/if}