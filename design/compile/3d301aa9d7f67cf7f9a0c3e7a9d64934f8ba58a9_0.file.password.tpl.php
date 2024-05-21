<?php
/* Smarty version 4.5.2, created on 2024-05-21 09:09:14
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/blocks/password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c64bad49a18_56004191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d301aa9d7f67cf7f9a0c3e7a9d64934f8ba58a9' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/blocks/password.tpl',
      1 => 1716281260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c64bad49a18_56004191 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="widget_main#pass" class="widget_main " style="width:42.857142857142854%">
    <div id="widget_inner#pass" class="widget_inner ">
        <div id="wlabel_cont#pass" class="widget_label ">
<span id="whint#pass" class="whint" onclick="asyncAlert(this.title)" title="name: pass
" style="display: none;">?</span>
            <span id="wlabel#pass" title="name: pass
">PASS</span>
            <span id="plabel#pass" class="plabel"></span>
            <span id="wsuffix#pass" class="wsuffix"></span>
        </div>
        <div id="widget#pass" class="widget_body " style="">
            <div class="w_inp_cont">
                <input data-type="pass" class="w_inp" type="password" value="," id="__pass" name="pass" onkeydown="UiInput.checkDown(this,event)" oninput="UiInput.check(this)" data-regex="" maxlength="" onfocusout="UiInput.send(this)">
                <div class="btn_inp_block">
                    <button class="icon w_eye" onclick="UiPass.toggle('pass')"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
