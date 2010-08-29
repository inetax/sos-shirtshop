<?php /* Smarty version 2.6.26, created on 2010-08-28 13:31:15
         compiled from caseinfo_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'caseinfo_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'caseinfo','assign' => 'obj'), $this);?>

<div class="box">
  <b>Add Case Information</b>
	<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAddCaseInfo; ?>
">
	<table>
	<tr>
		<td>Plaintiff</td>
		<td><input type ="text" name="plaintiff" >
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessagePT; ?>
</td>
	</tr>
	<tr>
		<td>Plaintiff (abbrev.)</td>
		<td><input type ="text" name="plaintiff_ab" >
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessagePTAB; ?>
</td>
	</tr>
	<tr>
		<td>Defendant</td>
		<td><input type ="text" name="defendant" >
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageDE; ?>
</td>
	</tr>
	<tr>
		<td>Defendant (abbrev.)</td>
		<td><input type ="text" name="defendant_ab" >
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageDEAB; ?>
</td>
	</tr>
	<tr>
		<td>IndexNo</td>
		<td><input type ="text" name="indexNo" >
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageIN; ?>
</td>
	</tr>
	<tr>
		<td>ClaimNo</td>
		<td><input type ="text" name="claimNo" id="claimNo">
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageCL; ?>
</td>
	</tr>
	 <tr>
    <td>Date of Accident</td>
    <td><input type ="text" name="dateAccident" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageDA; ?>
</td>
  </tr>
  <tr>
    <td>Policy Limit</td>
    <td><input type ="text" name="policyLimit" id="policyLimit" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessagePL; ?>
</td>
  </tr>
    <tr>
    <td>ExaminerID</td>
    <td><select name="examinerID">
    <option value=""></option>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mExaminerID) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>  
    <option value="<?php echo $this->_tpl_vars['obj']->mExaminerID[$this->_sections['i']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['obj']->mExaminerID[$this->_sections['i']['index']]['ID']; ?>
</option>
    <?php endfor; endif; ?>
  </select>
  <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageEID; ?>
</td>
  </tr>
    <tr>
    <td>CaseName</td>
    <td><input type ="text" name="caseName" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageCN; ?>
</td>
  </tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>