<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\ServiceRequest;
use App\Http\DB\Common\ImageUpload;
use App\Helpers\General;

class ServiceRequestStoreCommand extends Command
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

        //Create new entry in database if operation = 'new'
        if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = ServiceRequest::find($this->data['id']);

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
