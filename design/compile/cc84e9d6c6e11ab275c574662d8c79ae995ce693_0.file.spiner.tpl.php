<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:54:39
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/spiner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7d6fb90b22_64746849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc84e9d6c6e11ab275c574662d8c79ae995ce693' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/spiner.tpl',
      1 => 1716288872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7d6fb90b22_64746849 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="w_spinner_row">
    <button class="icon icon_btn btn_no_pad" onclick="UiSpinner.spin('spn',-1)"></button>
    <div class="w_spinner_block">
        <input data-type="spinner" id="__spn" class="w_spinner" type="number" oninput="UiSpinner.input('spn')" onkeydown="UiSpinner.checkDown(event,'spn')" value="0" min="0" max="100" step="1" data-dec="0" data-unit="" onwheel="UiSpinner.wheel(event,'spn')" style="width: 1ch;">
        <label class="w_spinner_unit" id="unit#spn" onwheel="UiSpinner.wheel(event,'spn')"></label>
    </div>
    <button class="icon icon_btn btn_no_pad" onclick="UiSpinner.spin('spn',1)"></button>
</div>
<?php }
}
