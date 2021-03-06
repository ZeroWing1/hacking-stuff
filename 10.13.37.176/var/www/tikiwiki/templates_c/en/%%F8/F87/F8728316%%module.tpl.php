<?php /* Smarty version 2.6.14, created on 2010-04-16 04:45:36
         compiled from module.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'module.tpl', 4, false),)), $this); ?>



<div class="box box-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<div class="box-title"><?php if ($this->_tpl_vars['user'] && $this->_tpl_vars['user_assigned_modules'] == 'y' && $this->_tpl_vars['no_module_controls'] != 'y' && $this->_tpl_vars['feature_modulecontrols'] == 'y'): ?>
<table class="box-title">
  <tr>
    <td width="11">
      <a title="Move module up" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['current_location'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['mpchar'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
mc_up=<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="img/icons2/up.gif" border="0" alt="[up]" /></a>
    </td>
    <td width="11">
      <a title="Move module down" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['current_location'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['mpchar'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
mc_down=<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="img/icons2/down.gif" border="0" alt="[down]" /></a>
    </td>
<td <?php if ($this->_tpl_vars['module_flip'] == 'y'): ?>ondblclick="javascript:icntoggle('mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
','mo.png');"<?php endif; ?>>
<span class="box-titletext"><?php echo $this->_tpl_vars['module_title']; ?>
</span>
</td>
    <td width="11">
<?php if ($this->_tpl_vars['module_flip'] == 'y'): ?><a title="Hide module contents" class="flipmodtitle" href="javascript:icntoggle('mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
','mo.png');"><img name="mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
icn" class="flipmodimage" src="img/icons/omo.png" border="0" alt="[hide]" /></a><?php else: ?>&nbsp;<?php endif; ?>
</td>
<td width="11">
<a title="Move module to opposite side" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['current_location'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['mpchar'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
mc_move=<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="img/icons2/admin_move.gif" border="0" alt="[opp side]" /></a>
</td>
<td width="16">
<a title="Unassign this module" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['current_location'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['mpchar'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
mc_unassign=<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" onclick="return confirmTheLink(this,'Are you sure you want to unassign this module?')"><img border="0" alt="[remove]" src="img/icons2/delete.gif" /></a>
</td>
</tr>
</table>
<?php else:  if ($this->_tpl_vars['module_flip'] == 'y'): ?>
<table class="box-title">
  <tr>
    <td ondblclick="javascript:icntoggle('mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
','mo.png');">
<span class="box-titletext"><?php endif;  echo $this->_tpl_vars['module_title'];  if ($this->_tpl_vars['module_flip'] == 'y'): ?></span>
    </td>
    <td width="11">
      <a title="Hide module contents" class="flipmodtitle" href="javascript:icntoggle('mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
','mo.png');"><img name="mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
icn" class="flipmodimage" src="img/icons/omo.png" border="0" alt="[hide]" /></a>
</td>
</tr>
</table>
<?php endif;  endif; ?>
</div><div id="mod-<?php echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="display: block" class="box-data">
<?php echo $this->_tpl_vars['module_content']; ?>

<?php echo $this->_tpl_vars['module_error']; ?>

<?php if ($this->_tpl_vars['module_flip'] == 'y'):  echo '
<script type="text/javascript">
  setsectionstate(\'mod-';  echo ((is_array($_tmp=$this->_tpl_vars['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  echo '\',\'mo.png\');
</script>
'; ?>

<?php endif; ?>
</div></div>