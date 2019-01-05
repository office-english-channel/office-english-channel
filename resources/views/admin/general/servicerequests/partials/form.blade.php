
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Category:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->category->category_name !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Sub-Category:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->subcategory->sub_category_name !!}</div>
            </div>
        </div>
    </div>
</div>

@if($record->vendor != '')
<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Vendor:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->vendor->vendor_name !!}</div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">First Name:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->first_name !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Last Name:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->last_name !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->email !!}</div>
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
                <div style="margin-top: 10px;">{!! $record->mobile_no !!}</div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Phone:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->phone_no !!}</div>
            </div>
        </div>
    </div>
</div> -->

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address One:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->address_1 !!}</div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address Two:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->address_2 !!}</div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">City Name:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->city_name !!}</div>
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
                <div style="margin-top: 10px;">{!! $record->state_name !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Zip-Code:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->zip_code !!}</div>
            </div>
        </div>
    </div>
</div> -->

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Comments:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->comments !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<br>

<div class="row margin-bottom-5">
    <div class="col-md-1"><label class="control-label"></label></div>
    <div class="col-md-4">
        <a href="{!! URL::route('admin.servicerequests.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>