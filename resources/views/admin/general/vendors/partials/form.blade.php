 
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Category: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::select('category_id', $category_list, null, [ 'class' => 'form-control arrow', 'id' => 'category_id', 'tabindex' => '22' ]) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Sub Category: <span class="required">*</span></label></div>
         
            <div class="col-md-7">
                <select class="form-control arrow" id="sub_category_id" tabindex="3" name="sub_category_id">
                
                    @if($record->sub_category_id != '')
                        <option value="{{ $record->sub_category_id }}">{{ $record->sub_category_id }}</option>
                    @else
                        <option value="">Select Sub Category</option>
                    @endif
                </select>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('vendor_name', null, array('class' => 'form-control', 'placeholder' => 'Name' , 'id' => 'vendor_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email' , 'id' => 'email', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Mobile:</label></div>
            <div class="col-md-7">
                {!! Form::text('mobile_no', null, array('class' => 'form-control', 'placeholder' => 'Mobile' , 'id' => 'mobile_no', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Phone:</label></div>
            <div class="col-md-7">
                {!! Form::text('phone_no', null, array('class' => 'form-control', 'placeholder' => 'Phone' , 'id' => 'phone_no', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address One:</label></div>
            <div class="col-md-7">
                {!! Form::text('address_1', null, array('class' => 'form-control', 'placeholder' => 'Address One' , 'id' => 'address_1', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address Two:</label></div>
            <div class="col-md-7">
                {!! Form::text('address_2', null, array('class' => 'form-control', 'placeholder' => 'Address Two' , 'id' => 'address_2', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">State Name:</label></div>
            <div class="col-md-7">
                {!! Form::text('state_name', null, array('class' => 'form-control', 'placeholder' => 'State Name' , 'id' => 'state_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">City Name:</label></div>
            <div class="col-md-7">
                {!! Form::text('city_name', null, array('class' => 'form-control', 'placeholder' => 'City Name' , 'id' => 'city_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Zip Code:</label></div>
            <div class="col-md-7">
                {!! Form::text('zip_code', null, array('class' => 'form-control', 'placeholder' => 'Zip Code' , 'id' => 'zip_code', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4">
                <label class="control-label">Status:</label>
            </div>
            <div class="col-md-7">
                <input type="checkbox" class="make-switch" name="status" id="status" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" data-size="small" value='1' @if($record->status=='1') {!! 'checked' !!} @endif tabindex="{!! $index !!}">
           </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4">
                <label class="control-label">Show In Banners:</label>
            </div>
            <div class="col-md-7">
                <input type="checkbox" class="make-switch" name="is_slider" id="is_slider" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" data-size="small" value='0' @if($record->is_slider=='1') {!! 'checked' !!} @endif tabindex="{!! $index !!}">
           </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Cover Image: </label></div>
            <div class="col-md-7">
                
                <div class="fileinput @if($record->cover_id!='')  {!! 'fileinput-exists' !!} @else {!! 'fileinput-new' !!} @endif" data-provides="fileinput" id="cover_media_div">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        @if($record->cover_id!='')
                            <img src="{!! asset( General::getResizeImage($record->cover->source, '150') ) !!}">
                        @endif
                    </div>
                    <input type="hidden" name="cover_media_id" id="cover_media_id" value="{!! $record->cover_id !!}">
                    <div>
                        <span class="btn blue-sharp btn-outline btn-circle btn-file">
                            <span class="fileinput-new"> <i class="fa fa-mouse-pointer"></i> Select </span>
                            <span class="fileinput-exists"> <i class="fa fa-pencil"></i> Uplode </span>
                            <input type="file" name="cover_image" id="cover_image" tabindex="{!! $index++ !!}">
                        </span>

                        <a href="javascript:;" class="btn red btn-outline btn-circle fileinput-exists mt-ladda-btn ladda-button" data-style="expand-right" onclick="removeimage('cover_media_id', 'cover_media_div', 'vendors', 'cover_id', '{!! $record->id !!}', $(this))" tabindex="{!! $index++ !!}"> <span class="ladda-label"> <i class="fa fa-trash"></i> Delete </span> </a>
                    </div>
                </div>

            </div>      
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Summary:  </label></div>
            <div class="col-md-7">
                {!! Form::textarea('summary', null, array('class' => 'form-control', 'placeholder' => 'Summary', 'id' => 'summary', 'maxlength' => '500', 'tabindex' => $index++)) !!}
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
        <a href="{!! URL::route('admin.vendors.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>