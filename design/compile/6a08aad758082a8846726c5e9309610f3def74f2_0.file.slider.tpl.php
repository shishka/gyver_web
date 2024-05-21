<?php
/* Smarty version 4.5.2, created on 2024-05-21 10:53:54
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c7d42aa12e6_34953344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a08aad758082a8846726c5e9309610f3def74f2' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/slider.tpl',
      1 => 1716288819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c7d42aa12e6_34953344 (Smarty_Internal_Template $_smarty_tpl) {
?><input data-type="slider" name="slider" id="__slider" oninput="UiSlider.move(this)" type="range" class="w_slider" value="56" min="0" max="100" step="1" data-dec="0" data-unit="" onwheel="UiSlider.wheel(event,this)" style="background-size: 56% 100%;">
<div class="w_slider_out"><output id="out#slider">56</output></div>
<?php }
}
