<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:52:01
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7cd1403202_86705214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2ef77a022546ffd67f0c02899d559f6dc85877' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/password.tpl',
      1 => 1716288709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7cd1403202_86705214 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="w_inp_cont">
    <input data-type="pass" class="w_inp" type="password" value="," id="__pass" name="pass" onkeydown="UiInput.checkDown(this,event)" oninput="UiInput.check(this)" data-regex="" maxlength="" onfocusout="UiInput.send(this)">
    <div class="btn_inp_block">
        <button class="icon w_eye" onclick="UiPass.toggle('pass')"></button>
    </div>
</div>
<?php }
}
