<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:11:05
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/dt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c733959ece1_88865320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd4c1c4affa20ef4df320014b8e91d13581aafcc' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/dt.tpl',
      1 => 1716286257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c733959ece1_88865320 (Smarty_Internal_Template $_smarty_tpl) {
?><input data-type="datetime" id="__datet" class="w_date" style="color:var(--prim)" type="datetime-local" value="1970-01-01T00:00:00" onclick="this.showPicker()" onchange="post_set('datet',getUnix(this))" step="1">
<?php }
}
