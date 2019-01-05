
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">First Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name' , 'id' => 'first_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Last Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name' , 'id' => 'last_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email' , 'id' => 'email', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row margin-bottom-5">
    <div class="col-md-5"><label class="control-label"></label></div>
    <div class="col-md-4">
        <button type="submit" class="btn green-jungle btn-outline btn-circle" tabindex="{!! $index++ !!}" id="submit_btn">
            <i class="fa fa-save"></i> Save
        </button>
        <a href="{!! URL::route('admin.subscribers.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>