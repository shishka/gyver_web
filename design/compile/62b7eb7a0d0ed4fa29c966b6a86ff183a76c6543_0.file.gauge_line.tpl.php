<?php
/* Smarty version 4.5.2, created on 2024-05-21 09:09:14
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/blocks/gauge_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c64bad30ca6_84623650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62b7eb7a0d0ed4fa29c966b6a86ff183a76c6543' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/blocks/gauge_line.tpl',
      1 => 1716281260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c64bad30ca6_84623650 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="widget_main#gagl" class="widget_main " style="width:33.333333333333336%">
    <div id="widget_inner#gagl" class="widget_inner ">
        <div id="wlabel_cont#gagl" class="widget_label ">
<span id="whint#gagl" class="whint" onclick="asyncAlert(this.title)" title="name: gagl
" style="display: none;">?</span>
            <span id="wlabel#gagl" title="name: gagl
">GAUGE_L</span>
            <span id="plabel#gagl" class="plabel"></span>
            <span id="wsuffix#gagl" class="wsuffix"></span>
        </div>
        <div id="widget#gagl" class="widget_body " style=""><canvas data-type="gauge_l" id="__gagl" width="288" height="60" style="width: 144px; height: 30px;"></canvas></div>
    </div>
</div>
<?php }
}
