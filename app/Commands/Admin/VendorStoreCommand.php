<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Vendor;
use App\Http\DB\Common\ImageUpload;
use App\Helpers\General;

class VendorStoreCommand extends Command
{
    public $data;
    public $request;
    public $operation = 'new';

    /**
     * @param $data
     * @param string $operation
     */

    public function __construct($data, $request, $operation = 'new') {
        $this->data = $data;
        $this->request = $request;
        $this->operation = $operation;
    }

    public function handle() {

        //Image Uploads
        if($this->operation == 'new') {
            $cover_id = '';
            
            if($this->request->hasFile('cover_image')) {
                $image_file = $this->request->file('cover_image');
                $cover_id   = ImageUpload::uploadImageAndResize("vendors", $image_file);
            }

        } else if($this->operation == 'edit') {
            $vendor     = Vendor::find($this->data['id']);

            $cover_id   = '';

            if($this->request->hasFile('cover_image')) {
                if($vendor->cover_id != NULL && $vendor->cover_id != '') {
                    $vendor->cover_id = null;
                    $vendor->save();
                    $result = ImageUpload::removeImage($vendor->cover_id);
                }
                $image_file = $this->request->file('cover_image');
                $cover_id   = ImageUpload::uploadImageAndResize("vendors", $image_file);
            }   
        }
        //Create new entry in database if operation = 'new'
        if($this->operation == 'new') {
            
            $record                     = new Vendor;

            $record->cover_id           = @($cover_id!='') ? ($cover_id) : null;
            $record->category_id        = $this->data['category_id'];
            $record->sub_category_id    = $this->data['sub_category_id'];            
            $record->vendor_name        = $this->data['vendor_name'];
            $record->slug               = General::getStringToSlug($this->data['vendor_name']);
            $record->email              = $this->data['email'];
            $record->address_1          = $this->data['address_1'];
            $record->address_2          = $this->data['address_2'];
            $record->city_name          = $this->data['city_name'];
            $record->state_name         = $this->data['state_name'];
            $record->zip_code           = $this->data['zip_code'];
            $record->mobile_no          = $this->data['mobile_no'];
            $record->phone_no           = $this->data['phone_no'];
            $record->summary            = $this->data['summary'];
            $record->is_slider          = @(isset($this->data['is_slider']))?'1':'0';
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Vendor::find($this->data['id']);

            if($this->request->hasFile('cover_image')) {
                $record->cover_id           = $cover_id;
            }
            
            $record->category_id        = $this->data['category_id'];
            $record->sub_category_id    = $this->data['sub_category_id'];            
            $record->vendor_name        = $this->data['vendor_name'];
            $record->slug               = General::getStringToSlug($this->data['vendor_name']);
            $record->email              = $this->data['email'];
            $record->address_1          = $this->data['address_1'];
            $record->address_2          = $this->data['address_2'];
            $record->city_name          = $this->data['city_name'];
            $record->state_name         = $this->data['state_name'];
            $record->zip_code           = $this->data['zip_code'];
            $record->mobile_no          = $this->data['mobile_no'];
            $record->phone_no           = $this->data['phone_no'];
            $record->summary            = $this->data['summary'];
            $record->is_slider          = @(isset($this->data['is_slider']))?'1':'0';
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Vendor::find($this->data['id']);

            if($record->cover_id != NULL && $record->cover_id != '') {
                $record->cover_id = null;
                $record->save();
                $result = ImageUpload::removeImage($record->cover_id);
            }

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
