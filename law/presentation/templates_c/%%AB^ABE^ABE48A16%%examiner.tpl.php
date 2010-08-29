<?php /* Smarty version 2.6.26, created on 2010-08-26 03:01:59
         compiled from examiner.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'examiner.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'examiner','assign' => 'obj'), $this);?>

<div class="box">
  <b>Add Examiner</b>
	<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAddExaminer; ?>
">
	<table>
	<tr>
		<td>Examiner ID</td>
		<td><input type ="text" name="examinerID" ></td>
	</tr>
	<tr>
		<td>Honorific</td>
		<td><select name="honorific">
	<option value=""></option>	
  	<option value="Mr.">Mr.</option>
  	<option value="Ms.">Ms.</option>
  	<option value="Mrs.">Mrs.</option>
  	<option value="Miss">Miss</option>
	</select></td>
	</tr>
	<tr>
		<td>Examiner First Name</td>
		<td><input type ="text" name="examinerFirstName" ></td>
	</tr>
	<tr>
		<td>Examiner Last Name</td>
		<td><input type ="text" name="examinerLastName" ></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  name="submit" value="Save"></td>
	</tr>
	</table>	
	</form>
</div>