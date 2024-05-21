<div id="widget_main#spn" class="widget_main " style="width:50%">
    <div id="widget_inner#spn" class="widget_inner ">
        <div id="wlabel_cont#spn" class="widget_label ">
<span id="whint#spn" class="whint" onclick="asyncAlert(this.title)" title="name: spn
" style="display: none;">?</span>
            <span id="wlabel#spn" title="name: spn
">SPINNER</span>
            <span id="plabel#spn" class="plabel"></span>
            <span id="wsuffix#spn" class="wsuffix"></span>
        </div>
        <div id="widget#spn" class="widget_body " style="">
            <div class="w_spinner_row">
                <button class="icon icon_btn btn_no_pad" onclick="UiSpinner.spin('spn',-1)"></button>
                <div class="w_spinner_block">
                    <input data-type="spinner" id="__spn" class="w_spinner" type="number" oninput="UiSpinner.input('spn')" onkeydown="UiSpinner.checkDown(event,'spn')" value="0" min="0" max="100" step="1" data-dec="0" data-unit="" onwheel="UiSpinner.wheel(event,'spn')" style="width: 1ch;">
                    <label class="w_spinner_unit" id="unit#spn" onwheel="UiSpinner.wheel(event,'spn')"></label>
                </div>
                <button class="icon icon_btn btn_no_pad" onclick="UiSpinner.spin('spn',1)"></button>
            </div>
        </div>
    </div>
</div>
