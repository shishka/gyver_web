<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:18:35
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/sketch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c74fbf0b045_58571945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7a35c490f22c0063f4aa39b87c911fec17f488' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/sketch.tpl',
      1 => 1716286715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widgets/".((string)$_smarty_tpl->tpl_vars[\'name\']->value).".tpl' => 1,
  ),
),false)) {
function content_664c74fbf0b045_58571945 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="widget_main#_n6" class="widget_main " style="width:<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%">
    <div id="widget_inner#_n6" class="widget_inner ">
        <div id="wlabel_cont#_n6" class="widget_label ">
            <span id="whint#_n6" class="whint" onclick="asyncAlert(this.title)" title="name: _n6" style="display: none;">?</span>
            <span id="wlabel#_n6" title="name: _n6"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
            <span id="plabel#_n6" class="plabel">as</span>
            <span id="wsuffix#_n6" class="wsuffix">zz</span>
        </div>
        <div id="widget#_n6" class="widget_body " style="">
            <?php $_smarty_tpl->_subTemplateRender("file:widgets/".((string)$_smarty_tpl->tpl_vars['name']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
</div>
<?php }
}
