@extends('admin.master')
 
@section('pagelevelcss')
    <link href="{!! asset('public/adminpanel/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('public/adminpanel/global/plugins/datatables/plugins/bootstrap/   dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css"/>
@stop

@section('breadcrumb')
    <li>
        <a href="{!! URL::route('admin.home') !!}">Home</a>
    </li>
    <li>{!! $title !!}</li>
@stop

@section('content')
<div class="page-content-inner">
    <div class="mt-content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light portlet-fit ">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-red sbold uppercase">{!! $title !!}</span>
                        </div>
                        <div class="actions">
                            <a href="{!! URL::route('admin.vendors.index') !!}" class="btn green-turquoise btn-outline">
                                Back 
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        {!! Form::model($record, array('route' => array('admin.vendors.store') , 'class' => 'form-horizontal', 'id' => 'add_vendors', 'files' => true))  !!}
                            {!! Form::hidden('id') !!}
                            @include($view.'partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@stop

@section('pageleveljs')
    <script src="{!! asset('public/adminpanel/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/additional-methods.js') !!}" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            var form1 = $('#add_vendors');
            var error1 = $('.alert-danger', form1);
            $("#add_vendors").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                invalidHandler: function (event, validator) { //display error alert on form submit
                    error1.show();
                    window.scrollTo(error1, -200);
                },
                highlight: function (element) { // hightlight error inputs
                    $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },
                success: function (label) {
                    label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },
                rules : {
                    vendor_name   : {
                        required    : true,
                        maxlength   : 90
                    },
                    category_id   : {
                        required    : true,
                    },
                    sub_category_id   : {
                        required    : true,
                    },
                    email   : {
                        required    : true,
                        email : true,
                        maxlength : 145
                    }
                },
                messages : {
                     vendor_name  : {
                        required    : 'Name is required field.',
                        maxlength   : 'Max 90 characters allowed.'
                    },
                    category_id  : {
                        required    : 'Category is required field.',
                    },
                    sub_category_id  : {
                        required    : 'Sub-Category is required field.',
                    },
                    email  : {
                        required    : 'Email is required field.',
                        email : 'Invalid Email.',
                        maxlength : 'Max 145 characters allowed.'
                    }
                }
            });

        //code for submit data on enter form controls
            $('#add_vendors').find('input').keypress(function(e) {
                 if(e.which == 10 || e.which == 13) {
                      $("#submit_btn").trigger('click');
                 }
            });

            // Getting Areas list from state id                 
            $('#category_id').change(function(){
                var categoryID = $(this).val(); 
                // alert(categoryID);
                if(categoryID){
                    $.ajax({
                       type:"GET",
                       url:"{{URL::route('admin.vendors.getareaslist')}}?category_id="+categoryID,
                       success:function(res){
                          
                        if(res){
                            $("#sub_category_id").empty();
                            $("#sub_category_id").append('<option>Select Sub Category</option>');
                                                        
                            $.each(res,function(key,value){                             
                                $("#sub_category_id").append('<option value="'+value.id+'">'+value.sub_category_name+'</option>');
                            });
                       
                        }else{
                           $("#sub_category_id").empty();
                        }
                       }
                    });
                }else{
                    
                    $("#sub_category_id").empty();
                }      
               });


        });

    </script>

@stop
