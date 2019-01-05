<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Category;
use App\Http\DB\Common\ImageUpload;
use App\Helpers\General;

class CategoryStoreCommand extends Command
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
                $cover_id   = ImageUpload::uploadImageAndResize("categories", $image_file);
            }

        } else if($this->operation == 'edit') {
            $category      = Category::find($this->data['id']);

            $cover_id   = '';

            if($this->request->hasFile('cover_image')) {
                if($category->cover_id != NULL && $category->cover_id != '') {
                    $category->cover_id = null;
                    $category->save();
                    $result = ImageUpload::removeImage($category->cover_id);
                }
                $image_file = $this->request->file('cover_image');
                $cover_id   = ImageUpload::uploadImageAndResize("categories", $image_file);
            }   
        }
        //Create new entry in database if operation = 'new'
        if($this->operation == 'new') {
            
            $record                     = new Category;

            $record->cover_id           = @($cover_id!='') ? ($cover_id) : null;
            $record->category_name      = $this->data['category_name'];
            $record->slug               = General::getStringToSlug($this->data['category_name']);
            $record->summary            = $this->data['summary'];
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Category::find($this->data['id']);

            if($this->request->hasFile('cover_image')) {
                $record->cover_id           = $cover_id;
            }
            
            $record->category_name      = $this->data['category_name'];
            $record->slug               = General::getStringToSlug($this->data['category_name']);
            $record->summary            = $this->data['summary'];
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Category::find($this->data['id']);

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
