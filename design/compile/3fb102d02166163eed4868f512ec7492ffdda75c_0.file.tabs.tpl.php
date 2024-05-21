<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:57:45
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7e29063fc6_62364964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb102d02166163eed4868f512ec7492ffdda75c' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/tabs.tpl',
      1 => 1716289063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7e29063fc6_62364964 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style id="style#tab">
    #__tab.w_tabs>ul>li.w_tab_act {background: #37a93c !important;}</style>

<div data-type="tabs" id="__tab" class="w_tabs"><ul onwheel="UiTabs.wheel(event,this)"><li onclick="UiTabs.click('tab',0)" class="w_tab_act">kek</li><li onclick="UiTabs.click('tab',1)">puk</li><li onclick="UiTabs.click('tab',2)">123</li><li onclick="UiTabs.click('tab',3)">hello</li><li onclick="UiTabs.click('tab',4)">azaz</li></ul></div>

<?php }
}
