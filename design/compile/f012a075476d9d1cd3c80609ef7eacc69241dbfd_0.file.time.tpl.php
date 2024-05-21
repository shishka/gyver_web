<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:59:03
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7e77972d38_09160401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f012a075476d9d1cd3c80609ef7eacc69241dbfd' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/time.tpl',
      1 => 1716289124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7e77972d38_09160401 (Smarty_Internal_Template $_smarty_tpl) {
?><input data-type="time" id="__time" class="w_date" style="color:var(--prim)" type="time" value="00:00:00" onclick="this.showPicker()" onchange="post_set('time',getUnix(this))" step="1">
<?php }
}
