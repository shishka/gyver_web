<?php
/* Smarty version 4.5.2, created on 2024-05-21 09:27:02
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c68e64677a0_62499907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6749d1d3133023ccd96adfc663804e8b8de7b7ca' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/button.tpl',
      1 => 1716283622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c68e64677a0_62499907 (Smarty_Internal_Template $_smarty_tpl) {
?><button data-type="button" id="___n6"
        style="font-size: 45px; color: var(--prim); width: unset;"
        class="icon w_btn"
        onclick="post_set('_n6',2)"
        onmousedown="if(!UiButton.touch)post_click('_n6',1)"
        onmouseup="if(!UiButton.touch&amp;&amp;UiButton.pressID)post_click('_n6',0)"
        onmouseleave="if(UiButton.pressID&amp;&amp;!UiButton.touch)post_click('_n6',0);"
        ontouchstart="UiButton.touch=1;post_click('_n6',1)"
        ontouchend="post_click('_n6',0)"
        data-color="var(--prim)"
        data-size="45px" data-inline="true"><?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</button>
<?php }
}
