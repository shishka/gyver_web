<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:12:30
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c738e93b794_39931421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a6671a1d59bf048ace70e099d2efc62cbd2c30' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/flags.tpl',
      1 => 1716286349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c738e93b794_39931421 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style id="style#flag">
    #flags_flag input:checked+.w_flags_s{background:#37a93c}</style>

<div data-type="flags" id="__flag" class="w_flags_cont w_flags_cont_tab" data-text="kek;puk;123;hello;azaz" data-value="0">
    <label id="flags_flag" class="w_flags w_flags_txt" style="width: 5.5ch;">
        <input name="flag" type="checkbox" onclick="UiFlags.click('flag',this)">
        <span class="w_flags_s w_flags_span" style="width: 5ch;">kek</span>
    </label>
    <label id="flags_flag" class="w_flags w_flags_txt" style="width: 5.5ch;">
        <input name="flag" type="checkbox" onclick="UiFlags.click('flag',this)">
        <span class="w_flags_s w_flags_span" style="width: 5ch;">puk</span>
    </label>
    <label id="flags_flag" class="w_flags w_flags_txt" style="width: 5.5ch;">
        <input name="flag" type="checkbox" onclick="UiFlags.click('flag',this)">
        <span class="w_flags_s w_flags_span" style="width: 5ch;">123</span>
    </label>
    <label id="flags_flag" class="w_flags w_flags_txt" style="width: 7.5ch;">
        <input name="flag" type="checkbox" onclick="UiFlags.click('flag',this)">
        <span class="w_flags_s w_flags_span" style="width: 7ch;">hello</span>
    </label>
    <label id="flags_flag" class="w_flags w_flags_txt" style="width: 6.5ch;">
        <input name="flag" type="checkbox" onclick="UiFlags.click('flag',this)">
        <span class="w_flags_s w_flags_span" style="width: 6ch;">azaz</span>
    </label></div>
<?php }
}
