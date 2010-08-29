<?php /* Smarty version 2.6.26, created on 2010-08-27 17:46:58
         compiled from lawfirm_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'lawfirm_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'lawfirm','assign' => 'obj'), $this);?>

<div class="box">
  <b>Add Law Firm</b>
  <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAddLawFirm; ?>
">
  <table>
  <tr>
    <td>ID</td>
    <td><input type ="text" name="lawFirmId" id="lawFirmId">
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageID; ?>
</td>
  </tr>
  <tr>
    <td>Law Firm Name</td>
    <td><input type ="text" name="lawFirmName" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageFN; ?>
</td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type ="text" name="address" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageAD; ?>
</td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type ="text" name="city" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageCT; ?>
</td>
  </tr>
   <tr>
    <td>State</td>
    <td><input type ="text" name="state" id="state">
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageST; ?>
</td>
  </tr>
   <tr>
    <td>Zip Code</td>
    <td><input type ="text" name="zipCode" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageZP; ?>
</td>
  </tr>
    <tr>
    <td>Telephone</td>
    <td><input type ="text" name="telephone" >
    <div class="errorMsg"><?php echo $this->_tpl_vars['obj']->mErrorMessageTEL; ?>
</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit"  name="submit" value="Save"></td>
  </tr>
  </table>  
  </form>
</div>