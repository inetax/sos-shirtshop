<?php /* Smarty version 2.6.26, created on 2010-08-28 01:21:59
         compiled from examiner_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'examiner_view.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'examiner','assign' => 'obj'), $this);?>


<b>Claim Examiners</b>
<?php if ($this->_tpl_vars['obj']->mResult): ?>
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
  <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mResult) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
  <tr>
    <td><?php echo $this->_tpl_vars['obj']->mResult[$this->_sections['k']['index']]['ID']; ?>
</td>
    <td><?php echo $this->_tpl_vars['obj']->mResult[$this->_sections['k']['index']]['Honorific']; ?>
</td>
    <td><?php echo $this->_tpl_vars['obj']->mResult[$this->_sections['k']['index']]['ExaminerFirstName']; ?>
</td>
    <td><?php echo $this->_tpl_vars['obj']->mResult[$this->_sections['k']['index']]['ExaminerLastName']; ?>
</td>
    </tr>
  <?php endfor; endif; ?>
</tbody>  
 </table>
<?php endif; ?>