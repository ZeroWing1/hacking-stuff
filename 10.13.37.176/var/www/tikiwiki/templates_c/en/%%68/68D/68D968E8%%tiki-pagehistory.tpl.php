<?php /* Smarty version 2.6.14, created on 2010-04-19 17:29:20
         compiled from tiki-pagehistory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'tiki-pagehistory.tpl', 3, false),array('modifier', 'userlink', 'tiki-pagehistory.tpl', 35, false),array('modifier', 'tiki_short_datetime', 'tiki-pagehistory.tpl', 35, false),array('block', 'tr', 'tiki-pagehistory.tpl', 28, false),array('function', 'cycle', 'tiki-pagehistory.tpl', 151, false),)), $this); ?>


<h1><a class="pagetitle" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'));  if ($this->_tpl_vars['preview']): ?>&amp;preview=<?php echo $this->_tpl_vars['preview'];  elseif ($this->_tpl_vars['source']): ?>&amp;source=<?php echo $this->_tpl_vars['source'];  elseif ($this->_tpl_vars['diff_style']): ?>&amp;compare=1&amp;oldver=<?php echo $this->_tpl_vars['old']['version']; ?>
&amp;newver=<?php echo $this->_tpl_vars['new']['version']; ?>
&amp;diff_style=<?php echo $this->_tpl_vars['diff_style'];  endif; ?>" title="history">History: <?php echo $this->_tpl_vars['page']; ?>
</a></h1>

<div class="navbar"><a href="tiki-index.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" class="linkbut" title="view">View page</a></div>

<?php if ($this->_tpl_vars['preview']): ?>
<h2>Preview of version: <?php echo $this->_tpl_vars['preview']; ?>

<?php if ($this->_tpl_vars['info']['version'] == $this->_tpl_vars['preview']): ?><small><small>(current)</small></small><?php endif; ?>
</h2>
<?php if ($this->_tpl_vars['info']['version'] != $this->_tpl_vars['preview'] && $this->_tpl_vars['tiki_p_rollback'] == 'y'): ?>
<div class="navbar"><a class="linkbut" href="tiki-rollback.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;version=<?php echo $this->_tpl_vars['preview']; ?>
" title="rollback">rollback to this version</a></div>
<?php endif; ?>
<div  class="wikitext"><?php echo $this->_tpl_vars['previewd']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['source']): ?>
<h2>Source of version: <?php echo $this->_tpl_vars['source']; ?>

<?php if ($this->_tpl_vars['info']['version'] == $this->_tpl_vars['source']): ?><small><small>(current)</small></small><?php endif; ?>
</h2>
<?php if ($this->_tpl_vars['info']['version'] != $this->_tpl_vars['source'] && $this->_tpl_vars['tiki_p_rollback'] == 'y'): ?>
<div class="navbar"><a class="linkbut" href="tiki-rollback.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;version=<?php echo $this->_tpl_vars['source']; ?>
" title="rollback">rollback to this version</a></div>
<?php endif; ?>
<div  class="wikitext"><?php echo $this->_tpl_vars['sourced']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['diff_style']): ?>
<h2><?php $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comparing version <?php echo $this->_tpl_vars['old']['version']; ?>
 with version <?php echo $this->_tpl_vars['new']['version'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
<table class="normal diff">
<tr>
  <th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;preview=<?php echo $this->_tpl_vars['old']['version']; ?>
" title="view"><?php echo $this->_tpl_vars['old']['version']; ?>
</a><?php if ($this->_tpl_vars['old']['version'] == $this->_tpl_vars['info']['version']): ?> (current)</a><?php endif; ?></b></th>
  <th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;preview=<?php echo $this->_tpl_vars['new']['version']; ?>
" title="view"><?php echo $this->_tpl_vars['new']['version'];  if ($this->_tpl_vars['new']['version'] == $this->_tpl_vars['info']['version']): ?> (current)</a><?php endif; ?></b></th>
</tr>
<tr>
  <td colspan="2"><?php if ($this->_tpl_vars['tiki_p_wiki_view_author'] != 'n'):  echo ((is_array($_tmp=$this->_tpl_vars['old']['user'])) ? $this->_run_mod_handler('userlink', true, $_tmp) : smarty_modifier_userlink($_tmp)); ?>
 - <?php endif;  echo ((is_array($_tmp=$this->_tpl_vars['old']['lastModif'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
</td>
  <td colspan="2"><?php if ($this->_tpl_vars['tiki_p_wiki_view_author'] != 'n'):  echo ((is_array($_tmp=$this->_tpl_vars['new']['user'])) ? $this->_run_mod_handler('userlink', true, $_tmp) : smarty_modifier_userlink($_tmp)); ?>
 - <?php endif;  echo ((is_array($_tmp=$this->_tpl_vars['new']['lastModif'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['old']['comment'] || $this->_tpl_vars['new']['comment']): ?>
<tr>
  <td colspan="2" class="editdate"><?php if ($this->_tpl_vars['old']['comment']):  echo $this->_tpl_vars['old']['comment'];  else: ?>&nbsp;<?php endif; ?></td>
  <td colspan="2" class="editdate"><?php if ($this->_tpl_vars['new']['comment']):  echo $this->_tpl_vars['new']['comment'];  else: ?>&nbsp;<?php endif; ?></td>
</tr>
<?php endif;  if ($this->_tpl_vars['old']['description'] != $this->_tpl_vars['new']['description']): ?>
<tr>
  <td colspan="2" class="diffdeleted"><?php if ($this->_tpl_vars['old']['description']):  echo $this->_tpl_vars['old']['description'];  else: ?>&nbsp;<?php endif; ?></td>
  <td colspan="2" class="diffadded"><?php if ($this->_tpl_vars['new']['description']):  echo $this->_tpl_vars['new']['description'];  else: ?>&nbsp;<?php endif; ?></td>
</tr>
<?php endif;  endif; ?>

<?php if ($this->_tpl_vars['diff_style'] == 'sideview'): ?>
<tr>
  <td colspan="2" valign="top" ><div class="wikitext"><?php echo $this->_tpl_vars['old']['data']; ?>
</div></td>
  <td colspan="2" valign="top" ><div class="wikitext"><?php echo $this->_tpl_vars['new']['data']; ?>
</div></td>
</tr>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['diff_style'] == 'unidiff'): ?>
 <tr><td colspan="4">
 <?php if ($this->_tpl_vars['diffdata']): ?>
   <?php unset($this->_sections['ix']);
$this->_sections['ix']['name'] = 'ix';
$this->_sections['ix']['loop'] = is_array($_loop=$this->_tpl_vars['diffdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ix']['show'] = true;
$this->_sections['ix']['max'] = $this->_sections['ix']['loop'];
$this->_sections['ix']['step'] = 1;
$this->_sections['ix']['start'] = $this->_sections['ix']['step'] > 0 ? 0 : $this->_sections['ix']['loop']-1;
if ($this->_sections['ix']['show']) {
    $this->_sections['ix']['total'] = $this->_sections['ix']['loop'];
    if ($this->_sections['ix']['total'] == 0)
        $this->_sections['ix']['show'] = false;
} else
    $this->_sections['ix']['total'] = 0;
if ($this->_sections['ix']['show']):

            for ($this->_sections['ix']['index'] = $this->_sections['ix']['start'], $this->_sections['ix']['iteration'] = 1;
                 $this->_sections['ix']['iteration'] <= $this->_sections['ix']['total'];
                 $this->_sections['ix']['index'] += $this->_sections['ix']['step'], $this->_sections['ix']['iteration']++):
$this->_sections['ix']['rownum'] = $this->_sections['ix']['iteration'];
$this->_sections['ix']['index_prev'] = $this->_sections['ix']['index'] - $this->_sections['ix']['step'];
$this->_sections['ix']['index_next'] = $this->_sections['ix']['index'] + $this->_sections['ix']['step'];
$this->_sections['ix']['first']      = ($this->_sections['ix']['iteration'] == 1);
$this->_sections['ix']['last']       = ($this->_sections['ix']['iteration'] == $this->_sections['ix']['total']);
?>
      <?php if ($this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['type'] == 'diffheader'): ?>
		<?php $this->assign('oldd', $this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['old']); ?>
		<?php $this->assign('newd', $this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['new']); ?>
           <br /><div class="diffheader">@@ <?php $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>-Lines: <?php echo $this->_tpl_vars['oldd']; ?>
 changed to +Lines: <?php echo $this->_tpl_vars['newd'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> @@</div>
      <?php elseif ($this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['type'] == 'diffdeleted'): ?>
		<div class="diffdeleted">
			<?php unset($this->_sections['iy']);
$this->_sections['iy']['name'] = 'iy';
$this->_sections['iy']['loop'] = is_array($_loop=$this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['iy']['show'] = true;
$this->_sections['iy']['max'] = $this->_sections['iy']['loop'];
$this->_sections['iy']['step'] = 1;
$this->_sections['iy']['start'] = $this->_sections['iy']['step'] > 0 ? 0 : $this->_sections['iy']['loop']-1;
if ($this->_sections['iy']['show']) {
    $this->_sections['iy']['total'] = $this->_sections['iy']['loop'];
    if ($this->_sections['iy']['total'] == 0)
        $this->_sections['iy']['show'] = false;
} else
    $this->_sections['iy']['total'] = 0;
if ($this->_sections['iy']['show']):

            for ($this->_sections['iy']['index'] = $this->_sections['iy']['start'], $this->_sections['iy']['iteration'] = 1;
                 $this->_sections['iy']['iteration'] <= $this->_sections['iy']['total'];
                 $this->_sections['iy']['index'] += $this->_sections['iy']['step'], $this->_sections['iy']['iteration']++):
$this->_sections['iy']['rownum'] = $this->_sections['iy']['iteration'];
$this->_sections['iy']['index_prev'] = $this->_sections['iy']['index'] - $this->_sections['iy']['step'];
$this->_sections['iy']['index_next'] = $this->_sections['iy']['index'] + $this->_sections['iy']['step'];
$this->_sections['iy']['first']      = ($this->_sections['iy']['iteration'] == 1);
$this->_sections['iy']['last']       = ($this->_sections['iy']['iteration'] == $this->_sections['iy']['total']);
?>
				<?php if (! $this->_sections['iy']['first']): ?><br /><?php endif; ?>
				- <?php echo $this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data'][$this->_sections['iy']['index']]; ?>

			<?php endfor; endif; ?>
            </div>
      <?php elseif ($this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['type'] == 'diffadded'): ?>
            <div class="diffadded">
			<?php unset($this->_sections['iy']);
$this->_sections['iy']['name'] = 'iy';
$this->_sections['iy']['loop'] = is_array($_loop=$this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['iy']['show'] = true;
$this->_sections['iy']['max'] = $this->_sections['iy']['loop'];
$this->_sections['iy']['step'] = 1;
$this->_sections['iy']['start'] = $this->_sections['iy']['step'] > 0 ? 0 : $this->_sections['iy']['loop']-1;
if ($this->_sections['iy']['show']) {
    $this->_sections['iy']['total'] = $this->_sections['iy']['loop'];
    if ($this->_sections['iy']['total'] == 0)
        $this->_sections['iy']['show'] = false;
} else
    $this->_sections['iy']['total'] = 0;
if ($this->_sections['iy']['show']):

            for ($this->_sections['iy']['index'] = $this->_sections['iy']['start'], $this->_sections['iy']['iteration'] = 1;
                 $this->_sections['iy']['iteration'] <= $this->_sections['iy']['total'];
                 $this->_sections['iy']['index'] += $this->_sections['iy']['step'], $this->_sections['iy']['iteration']++):
$this->_sections['iy']['rownum'] = $this->_sections['iy']['iteration'];
$this->_sections['iy']['index_prev'] = $this->_sections['iy']['index'] - $this->_sections['iy']['step'];
$this->_sections['iy']['index_next'] = $this->_sections['iy']['index'] + $this->_sections['iy']['step'];
$this->_sections['iy']['first']      = ($this->_sections['iy']['iteration'] == 1);
$this->_sections['iy']['last']       = ($this->_sections['iy']['iteration'] == $this->_sections['iy']['total']);
?>
				<?php if (! $this->_sections['iy']['first']): ?><br /><?php endif; ?>
				+ <?php echo $this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data'][$this->_sections['iy']['index']]; ?>

			<?php endfor; endif; ?>
		</div>
      <?php elseif ($this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['type'] == 'diffbody'): ?>
            <div class="diffbody">
			<?php unset($this->_sections['iy']);
$this->_sections['iy']['name'] = 'iy';
$this->_sections['iy']['loop'] = is_array($_loop=$this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['iy']['show'] = true;
$this->_sections['iy']['max'] = $this->_sections['iy']['loop'];
$this->_sections['iy']['step'] = 1;
$this->_sections['iy']['start'] = $this->_sections['iy']['step'] > 0 ? 0 : $this->_sections['iy']['loop']-1;
if ($this->_sections['iy']['show']) {
    $this->_sections['iy']['total'] = $this->_sections['iy']['loop'];
    if ($this->_sections['iy']['total'] == 0)
        $this->_sections['iy']['show'] = false;
} else
    $this->_sections['iy']['total'] = 0;
if ($this->_sections['iy']['show']):

            for ($this->_sections['iy']['index'] = $this->_sections['iy']['start'], $this->_sections['iy']['iteration'] = 1;
                 $this->_sections['iy']['iteration'] <= $this->_sections['iy']['total'];
                 $this->_sections['iy']['index'] += $this->_sections['iy']['step'], $this->_sections['iy']['iteration']++):
$this->_sections['iy']['rownum'] = $this->_sections['iy']['iteration'];
$this->_sections['iy']['index_prev'] = $this->_sections['iy']['index'] - $this->_sections['iy']['step'];
$this->_sections['iy']['index_next'] = $this->_sections['iy']['index'] + $this->_sections['iy']['step'];
$this->_sections['iy']['first']      = ($this->_sections['iy']['iteration'] == 1);
$this->_sections['iy']['last']       = ($this->_sections['iy']['iteration'] == $this->_sections['iy']['total']);
?>
				<?php if (! $this->_sections['iy']['first']): ?><br /><?php endif; ?>
				<?php echo $this->_tpl_vars['diffdata'][$this->_sections['ix']['index']]['data'][$this->_sections['iy']['index']]; ?>

			<?php endfor; endif; ?>
		</div>
      <?php endif; ?>
   <?php endfor; endif; ?>
 <?php else: ?>
 <div class="diffheader">Versions are identical</div>
 <?php endif; ?>
</td></tr>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['diff_style'] == 'sidediff' || $this->_tpl_vars['diff_style'] == 'minsidediff'): ?>
  <?php if ($this->_tpl_vars['diffdata']):  echo $this->_tpl_vars['diffdata'];  else: ?>Versions are identical</td></tr></table><?php endif;  endif; ?>
<br />

<?php if (( ! isset ( $this->_tpl_vars['noHistory'] ) )): ?>                                              
<?php if ($this->_tpl_vars['preview'] || $this->_tpl_vars['source'] || $this->_tpl_vars['diff_style']): ?><h2>History</h2><?php endif; ?>
<form action="tiki-pagehistory.php" method="post">
<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<div style="text-align:center;">
<div class="simplebox"><b>Legend:</b> v=view, s=source<?php if ($this->_tpl_vars['default_wiki_diff_style'] == 'old'): ?>, c=compare, d=diff<?php endif;  if ($this->_tpl_vars['tiki_p_rollback'] == 'y'): ?>, b=rollback<?php endif; ?></div>
<?php if ($this->_tpl_vars['default_wiki_diff_style'] != 'old'): ?>
<div style=" text-align:right;"><select name="diff_style">
	<option value="minsidediff" <?php if ($this->_tpl_vars['diff_style'] == 'minsidediff'): ?>selected="selected"<?php endif; ?>>Side-by-side diff</option>
	<option value="sidediff" <?php if ($this->_tpl_vars['diff_style'] == 'sidediff'): ?>selected="selected"<?php endif; ?>>Full side-by-side diff</option>
	<option value="unidiff" <?php if ($this->_tpl_vars['diff_style'] == 'unidiff'): ?>selected="selected"<?php endif; ?>>Unified diff</option>
	<option value="sideview" <?php if ($this->_tpl_vars['diff_style'] == 'sideview'): ?>selected="selected"<?php endif; ?>>Side-by-side view</option>
</select>
</div>
<?php endif; ?>

<table border="1" cellpadding="2" cellspacing="0">
<tr>
<?php if ($this->_tpl_vars['tiki_p_remove'] == 'y'): ?><th class="heading"><input type="submit" name="delete" value="del" /></th><?php endif; ?>
<th class="heading">Date</th>
<th class="heading">User</th>
<?php if ($this->_tpl_vars['feature_wiki_history_ip'] != 'n'): ?><th class="heading">Ip</th><?php endif; ?>
<th class="heading">Comment</th>
<th class="heading">Version</th>
<th class="heading">Action</th>
<?php if ($this->_tpl_vars['default_wiki_diff_style'] != 'old' && $this->_tpl_vars['history']): ?>
<th class="heading" colspan="2">
<input type="submit" name="compare" value="compare" /><br />
</th>
<?php endif; ?>
</tr>
<tr>
<?php if ($this->_tpl_vars['tiki_p_remove'] == 'y'): ?>
<td class="odd">&nbsp;</td>
<?php endif; ?>
<td class="odd"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['lastModif'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
</td>
<?php if ($this->_tpl_vars['tiki_p_wiki_view_author'] != 'n'): ?><td class="odd"><?php echo $this->_tpl_vars['info']['user']; ?>
</td><?php endif;  if ($this->_tpl_vars['feature_wiki_history_ip'] != 'n'): ?><td class="odd"><?php echo $this->_tpl_vars['info']['ip']; ?>
</td><?php endif; ?>
<td class="odd"><?php if ($this->_tpl_vars['info']['comment']):  echo $this->_tpl_vars['info']['comment'];  else: ?>&nbsp;<?php endif; ?></td>
<td class="odd button"><?php echo $this->_tpl_vars['info']['version']; ?>
<br />current</td>
<td class="odd button">&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;preview=<?php echo $this->_tpl_vars['info']['version']; ?>
" title="view">v</a>
&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;source=<?php echo $this->_tpl_vars['info']['version']; ?>
" title="source">s</a>
</td>
<?php if ($this->_tpl_vars['default_wiki_diff_style'] != 'old' && $this->_tpl_vars['history']): ?>
<td class="odd button"><input type="radio" name="oldver" value="0" title="compare" <?php if ($this->_tpl_vars['old']['version'] == $this->_tpl_vars['info']['version']): ?>checked="checked"<?php endif; ?> /></td>
<td class="odd button"><input type="radio" name="newver" value="0" title="compare" <?php if ($this->_tpl_vars['new']['version'] == $this->_tpl_vars['info']['version'] || ! $this->_tpl_vars['diff_style']): ?>checked="checked"<?php endif; ?>  /></td>
<?php endif; ?>
</tr>
<?php echo smarty_function_cycle(array('values' => "odd,even",'print' => false), $this);?>

<?php unset($this->_sections['hist']);
$this->_sections['hist']['name'] = 'hist';
$this->_sections['hist']['loop'] = is_array($_loop=$this->_tpl_vars['history']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hist']['show'] = true;
$this->_sections['hist']['max'] = $this->_sections['hist']['loop'];
$this->_sections['hist']['step'] = 1;
$this->_sections['hist']['start'] = $this->_sections['hist']['step'] > 0 ? 0 : $this->_sections['hist']['loop']-1;
if ($this->_sections['hist']['show']) {
    $this->_sections['hist']['total'] = $this->_sections['hist']['loop'];
    if ($this->_sections['hist']['total'] == 0)
        $this->_sections['hist']['show'] = false;
} else
    $this->_sections['hist']['total'] = 0;
if ($this->_sections['hist']['show']):

            for ($this->_sections['hist']['index'] = $this->_sections['hist']['start'], $this->_sections['hist']['iteration'] = 1;
                 $this->_sections['hist']['iteration'] <= $this->_sections['hist']['total'];
                 $this->_sections['hist']['index'] += $this->_sections['hist']['step'], $this->_sections['hist']['iteration']++):
$this->_sections['hist']['rownum'] = $this->_sections['hist']['iteration'];
$this->_sections['hist']['index_prev'] = $this->_sections['hist']['index'] - $this->_sections['hist']['step'];
$this->_sections['hist']['index_next'] = $this->_sections['hist']['index'] + $this->_sections['hist']['step'];
$this->_sections['hist']['first']      = ($this->_sections['hist']['iteration'] == 1);
$this->_sections['hist']['last']       = ($this->_sections['hist']['iteration'] == $this->_sections['hist']['total']);
?>
<tr>
<?php if ($this->_tpl_vars['tiki_p_remove'] == 'y'): ?>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
 button"><input type="checkbox" name="hist[<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
]" /></td>
<?php endif; ?>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['history'][$this->_sections['hist']['index']]['lastModif'])) ? $this->_run_mod_handler('tiki_short_datetime', true, $_tmp) : smarty_modifier_tiki_short_datetime($_tmp)); ?>
</td>
<?php if ($this->_tpl_vars['tiki_p_wiki_view_author'] != 'n'): ?><td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
"><?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['user']; ?>
</td><?php endif;  if ($this->_tpl_vars['feature_wiki_history_ip'] != 'n'): ?><td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
"><?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['ip']; ?>
</td><?php endif; ?>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
"><?php if ($this->_tpl_vars['history'][$this->_sections['hist']['index']]['comment']):  echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['comment'];  else: ?>&nbsp;<?php endif; ?></td>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
 button"><?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
</td>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
 button">
&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;preview=<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
" title="view">v</a>
&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;source=<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
" title="source">s</a>
<?php if ($this->_tpl_vars['default_wiki_diff_style'] == 'old'): ?>
&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;diff2=<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
&amp;diff_style=sideview" title="compare">c</a>
&nbsp;<a class="link" href="tiki-pagehistory.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;diff2=<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
&amp;diff_style=unidiff" title="diff">d</a>
<?php endif;  if ($this->_tpl_vars['tiki_p_rollback'] == 'y'): ?>
&nbsp;<a class="link" href="tiki-rollback.php?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;version=<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
" title="rollback">b</a>
<?php endif; ?>
&nbsp;
</td>
<?php if ($this->_tpl_vars['default_wiki_diff_style'] != 'old'): ?>
<td class="<?php echo smarty_function_cycle(array('advance' => false), $this);?>
 button">
<input type="radio" name="oldver" value="<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
" title="older version" <?php if ($this->_tpl_vars['old']['version'] == $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version'] || ( ! $this->_tpl_vars['diff_style'] && $this->_sections['hist']['first'] )): ?>checked="checked"<?php endif; ?> />
</td>
<td class="<?php echo smarty_function_cycle(array(), $this);?>
 button">

<input type="radio" name="newver" value="<?php echo $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']; ?>
" title="Select a newer version for comparison" <?php if ($this->_tpl_vars['new']['version'] == $this->_tpl_vars['history'][$this->_sections['hist']['index']]['version']): ?>checked="checked"<?php endif; ?> />
</td>
<?php endif; ?>
</tr>
<?php endfor; endif; ?>
</table>
</div>
</form>
<?php endif; ?>