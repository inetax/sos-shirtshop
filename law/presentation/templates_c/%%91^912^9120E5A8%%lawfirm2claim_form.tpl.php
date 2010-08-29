<?php /* Smarty version 2.6.26, created on 2010-08-27 18:24:43
         compiled from lawfirm2claim_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'lawfirm2claim_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'lawfirm2claim','assign' => 'obj'), $this);?>


<div class="box">
  <b>Add Law Firm</b>
  <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAssignFirm2Claim; ?>
">
  <table>
  <tr>
    <td>Law Firm ID</td>
    <td><input type ="text" name="lawFirmId" id="lawFirmId">
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageID; ?>
</td>
  </tr>
  <tr>
    <td>Claim No</td>
    <td><input type ="text" name="claimNo" id="claimNo">
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageCL; ?>
</td>
  </tr>
  
  <tr>
    <td></td>
    <td><input type="submit"  name="submit" value="Save"></td>
  </tr>
  </table>  
  </form>
</div>