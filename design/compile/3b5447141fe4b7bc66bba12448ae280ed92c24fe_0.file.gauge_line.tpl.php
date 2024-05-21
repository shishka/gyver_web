<?php
/* Smarty version 4.5.2, created on 2024-05-21 11:29:23
  from '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/gauge_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664c859362be23_01759379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b5447141fe4b7bc66bba12448ae280ed92c24fe' => 
    array (
      0 => '/Users/soft/PhpstormProjects/gyver_web/design/html/widgets/gauge_line.tpl',
      1 => 1716290963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c859362be23_01759379 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div  style="position: relative;width: 100%; height: 40px">
    <div style="position: absolute;width: 100%;">
        <input  data-type="slider" name="slider" id="__slider" class="w_slider" oninput="UiSlider.move(this)" type="range"  value="56" min="0" max="100" step="1" data-dec="0" data-unit="" onwheel="UiSlider.wheel(event,this)" style="background-size: 26% 100%;">
    </div>
    <div style="position: absolute; width: 100%;">
        <div style="display: flex;justify-content: space-between; margin: 6px">
            <div><small>0</small></div>
            <div>30</div>
            <div><small>56</small></div>
        </div>
    </div>
</div>
<?php }
}
