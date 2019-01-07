<h2>About Us</h2>
<div class="col-md-12">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-2"><label class="control-label">about text:  </label></div>
            <div class="col-md-10">
                {!! Form::textarea('about_textarea', null, array('class' => 'form-control ckeditor', 'placeholder' => 'About Us Text', 'id' => 'about_textarea', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<h2>Gallery</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">gallery text : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('gallery_text', null, array('class' => 'form-control', 'placeholder' => 'gallery text' , 'id' => 'gallery_text', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Contact Us</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">contact text : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('contactus_text', null, array('class' => 'form-control', 'placeholder' => 'contact us text' , 'id' => 'contactus_text', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Student</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 1 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('student_text_1', null, array('class' => 'form-control', 'placeholder' => 'student text 1' , 'id' => 'student_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 2 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('student_text_2', null, array('class' => 'form-control', 'placeholder' => 'student text 2' , 'id' => 'student_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Blog</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 1 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('blog_text_1', null, array('class' => 'form-control', 'placeholder' => 'blog text 1' , 'id' => 'blog_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 2 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('blog_text_2', null, array('class' => 'form-control', 'placeholder' => 'blog text 2' , 'id' => 'blog_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Blog Detail</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 1 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('blog_detail_text_1', null, array('class' => 'form-control', 'placeholder' => 'blog detail text 1' , 'id' => 'blog_detail_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">text 2 : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('blog_detail_text_2', null, array('class' => 'form-control', 'placeholder' => 'blog detail text 2' , 'id' => 'blog_detail_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>IELTS Form</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Date text : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_date', null, array('class' => 'form-control', 'placeholder' => 'date text' , 'id' => 'ielts_date', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Time text : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_time', null, array('class' => 'form-control', 'placeholder' => 'time text' , 'id' => 'ielts_time', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_address', null, array('class' => 'form-control', 'placeholder' => 'address' , 'id' => 'ielts_address', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Contact Number : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_contact_number', null, array('class' => 'form-control', 'placeholder' => 'contact number' , 'id' => 'ielts_contact_number', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email : <span class="required">*</span></label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_contact_email', null, array('class' => 'form-control', 'placeholder' => 'email' , 'id' => 'ielts_contact_email', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Book your seat : <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_book_seat', null, array('class' => 'form-control', 'placeholder' => 'book your seat text' , 'id' => 'ielts_book_seat', 'maxlength' => '255', 'tabindex' => $index++)) !!}
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
    </div>
</div>