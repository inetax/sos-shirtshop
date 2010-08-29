{* examiner_view.tpl *}
{load_presentation_object filename="examiner" assign="obj"}

<b>Claim Examiners</b>
{if $obj->mResult}
<table id="tableView">
<thead>
<tr>
  <th width="100">ID</th>
  <th width="100">Honorific</th>
  <th width="100">First Name</th>
  <th width="100">Last Name</th>
</tr>
</thead>
<tbody>
  {section name=k loop=$obj->mResult}
  <tr>
    <td>{$obj->mResult[k].ID}</td>
    <td>{$obj->mResult[k].Honorific}</td>
    <td>{$obj->mResult[k].ExaminerFirstName}</td>
    <td>{$obj->mResult[k].ExaminerLastName}</td>
    </tr>
  {/section}
</tbody>  
 </table>
{/if}
