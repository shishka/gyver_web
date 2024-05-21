<div id="widget_main#time" class="widget_main " style="width:60%">
    <div id="widget_inner#time" class="widget_inner ">
        <div id="wlabel_cont#time" class="widget_label ">
<span id="whint#time" class="whint" onclick="asyncAlert(this.title)" title="name: time
" style="display: none;">?</span>
            <span id="wlabel#time" title="name: time
">TIME</span>
            <span id="plabel#time" class="plabel"></span>
            <span id="wsuffix#time" class="wsuffix"></span>
        </div>
        <div id="widget#time" class="widget_body " style=""><input data-type="time" id="__time" class="w_date" style="color:var(--prim)" type="time" value="00:00:00" onclick="this.showPicker()" onchange="post_set('time',getUnix(this))" step="1"></div>
    </div>
</div>
