<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
        <div class="form-group form-md-line-input">
            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => trans($lang.'title_lbl'), 'id' => 'title', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            <label for="form_control_1">
                {!! trans($lang.'title_lbl') !!}
                <span class="required">*</span>
            </label>
        </div>
        <div class="form-group form-md-line-input">
            {!! Form::text('slug', null, array('class' => 'form-control', 'placeholder' => trans($lang.'slug_lbl'), 'id' => 'slug', 'maxlength' => '145', 'readonly' => true, 'tabindex' => '2')) !!}
            <label for="form_control_1">
                {!! trans($lang.'slug_lbl') !!}
            </label>
        </div>
        <div class="form-group form-md-radios">
            <label for="menu_type1">{!! trans($lang.'menu_type_lbl') !!}:</label>
            <div class="md-radio-inline">

                <div class="md-radio">
                    <input type="radio" id="menu_type1" onclick="linkOne()" name="menu_type" value="1"
                           class="md-radiobtn" {{ $record->menu_type == '1' ? 'checked' : '' }} checked="checked">
                    <label for="menu_type1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'menu_type_page_lbl') !!} </label>
                </div>
                <!-- <div class="md-radio">
                    <input type="radio" id="menu_type2" onclick="linkTwo();" name="menu_type" value="0"
                           class="md-radiobtn" {{ $record->menu_type == '0' ? 'checked' : '' }}>
                    <label for="menu_type2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'menu_type_post_lbl') !!} </label>
                </div> -->
                
            </div>

        </div>
    </div>

</div>
<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">

        <div class="form-group form-md-line-input" id="page_id">
            {!! Form::select('page_id', $page_list, null, [ 'class' => 'form-control arrow', 'id' => 'page_id', 'tabindex' => $index++ ]) !!}
            <label for="form_control_1">
                {!! trans($lang.'page_id_lbl') !!}
                <span class="required">*</span>
            </label>
        </div>
        <div class="form-group form-md-line-input" id="post_category_id">
            {!! Form::select('post_category_id', $postCategory_list, null, [ 'class' => 'form-control arrow', 'id' => 'post_category_id', 'tabindex' => $index++ ]) !!}
            <label for="form_control_1">
                {!! trans($lang.'post_category_id_lbl') !!}
                <span class="required">*</span>
            </label>
        </div>

        <div class="form-group form-md-line-input">
            {!! Form::select('column_number', $column_list, null, [ 'class' => 'form-control arrow', 'id' => 'column_number', 'tabindex' => $index++ ]) !!}
            <label for="form_control_1">
                {!! trans($lang.'column_lbl') !!}
                <span class="required">*</span>
            </label>
        </div>

        {{--<div class="form-group form-md-line-input" id="link">
            {!! Form::text('links', null, array('class' => 'form-control', 'placeholder' => trans($lang.'link_lbl'), 'id' => 'links', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            <label for="form_control_1">
                {!! trans($lang.'link_lbl') !!}
                <span class="required">*</span>
            </label>
        </div>--}}

        <div class="form-group form-md-radios">
            <label for="status1">{!! trans($lang.'status_lbl') !!}:</label>
            <div class="md-radio-inline">
                <?php
                $radio1 = '';
                $radio2 = '';
                if ($record->status == '1') {
                    $radio1 = 'checked';
                } else {
                    $radio2 = 'checked';
                }

                ?>
                <div class="md-radio">
                    <input type="radio" id="status1" name="status" value="1" class="md-radiobtn" {!! $radio1 !!}>
                    <label for="status1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_active_lbl') !!} </label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="status2" name="status" value="0" class="md-radiobtn" {!! $radio2 !!}>
                    <label for="status2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_inactive_lbl') !!} </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row margin-bottom-5">
    <div class="col-md-5"><label class="control-label"></label></div>
    <div class="col-md-4">
        <button type="submit" class="btn green-jungle btn-outline btn-circle" tabindex="{!! $index++ !!}"
                id="submit_btn">
            <i class="fa fa-save"></i> {!! trans($lang.'submit_btn_lbl') !!}
        </button>
        <a href="{!! URL::route('admin.general.footerlinks.index') !!}" class="btn dark btn-outline btn-circle"
           tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> {!! trans($lang.'cancel_btn_lbl') !!}
        </a>
    </div>
</div>
<script src="{!! asset('public/adminpanel/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
 <script type="text/javascript">
    $(document).ready(function () {
        $("#title").keyup(function () {
            var title = $(this).val();
            title = title.toLowerCase();
            title = title.replace(/[^\w ]+/g, '');
            title = title.replace(/ +/g, '-');
            $("#slug").val(title);
        });
        if($('#menu_type1').is(':checked')) {
            $('#page_id').show();
            $('#post_category_id').hide();
            $('#parent_menu_id').hide();
        }
        if($('#menu_type2').is(':checked')) {
            $('#page_id').hide();
            $('#parent_menu_id').hide();
            $('#post_category_id').show();
        }
        if($('#menu_type3').is(':checked')) {
            $('#page_id').hide();
            $('#parent_menu_id').show();
            $('#post_category_id').hide();
        }
    });
    function linkOne(){
        if($('#menu_type1').is(':checked')) {
            $('#page_id').show();
            $('#parent_menu_id').hide();
            $('#post_category_id').hide();
        }
    }
    function linkTwo(){
        if($('#menu_type2').is(':checked')) {
            $('#page_id').hide();
            $('#parent_menu_id').hide();
            $('#post_category_id').show();
        }
    } function linkThree(){
        if($('#menu_type3').is(':checked')) {
            $('#page_id').hide();
            $('#post_category_id').hide();
            $('#parent_menu_id').show();
        }
    }
</script>
