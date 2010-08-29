<?php /* Smarty version 2.6.26, created on 2010-08-28 13:29:00
         compiled from examiner_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'examiner_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'examiner','assign' => 'obj'), $this);?>

<div class="box">
  <b>Add Claim Examiner</b>
	<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToValidateExaminer; ?>
">
	<table>
	<tr>
		<td>Examiner ID</td>
		<td><input type ="text" name="examinerID" id="examinerId">
		<div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageID; ?>
</div></td>
	</tr>
	<tr>
		<td>Honorific</td>
		<td><input type ="text" name="honorific" id="honorific"><div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageHN; ?>
</div</td>
	</tr>
	<tr>
		<td>Examiner First Name</td>
		<td><input type ="text" name="examinerFirstName" ><div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageFN; ?>
</div</td>
	</tr>
	<tr>
		<td>Examiner Last Name</td>
		<td><input type ="text" name="examinerLastName" ><div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageLN; ?>
</div</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>