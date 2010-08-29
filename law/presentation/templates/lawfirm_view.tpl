{* lawfirm_view.tpl *}
{load_presentation_object filename="lawfirm" assign="obj"}

<b>All Cases Information</b>
{if $obj->mResult}
<table id="tableView">
<thead>
<tr>
  <th width="100">ID</th>
  <th width="100">Firm Name</th>
  <th width="100">Address</th>
  <th width="100">City</th>
  <th width="100">State</th>
  <th width="100">ZipCode</th>
  <th width="100">Telephone</th>  
</tr>
</thead>
<tbody>
  {section name=k loop=$obj->mResult}
  <tr>
    <td>{$obj->mResult[k].ID}</td>
    <td>{$obj->mResult[k].LawFirmName}</td>
    <td>{$obj->mResult[k].Address}</td>
    <td>{$obj->mResult[k].City}</td>
    <td>{$obj->mResult[k].State}</td>
    <td>{$obj->mResult[k].ZipCode}</td>
    <td>{$obj->mResult[k].Telephone}</td>   
    </tr>
  {/section}
</tbody>  
 </table>
{/if}