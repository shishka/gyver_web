<?php
/* Smarty version 4.5.2, created on 2024-05-21 09:50:48
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c6e78203f00_17564585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5f4515f781d10500881e8fa8a558a773db2968' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/date.tpl',
      1 => 1716285035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c6e78203f00_17564585 (Smarty_Internal_Template $_smarty_tpl) {
?><input data-type="date" id="__date" class="w_date" style="color:var(--prim)" type="date" value="1970-01-01" onclick="this.showPicker()" onchange="post_set('date',getUnix(this))">
<?php }
}
