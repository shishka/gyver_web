<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:49:10
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/led.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7c26cf1090_59893671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df70563c9873eecfd9e131e3fb4aa0978947b03' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/led.tpl',
      1 => 1716288549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7c26cf1090_59893671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style id="style#icon">
    #__icon.w_icon_on {
        color: #37a93c;
        text-shadow: 0 0 10px #37a93c;
    }</style>


<span data-type="icon" id="__icon" style="font-size:35px" class="w_icon w_icon_led <?php if ($_smarty_tpl->tpl_vars['state']->value) {?>w_icon_on<?php }?>"></span>
<?php }
}
