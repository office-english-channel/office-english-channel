<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Subscriber;

class SubscriberStoreCommand extends Command
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
        if($this->operation == 'new') {
            
            $record                     = new Subscriber;

            $record->first_name         = $this->data['first_name'];            
            $record->last_name          = $this->data['last_name'];
            $record->email              = $this->data['email'];
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Subscriber::find($this->data['id']);           
            
            $record->first_name         = $this->data['first_name'];            
            $record->last_name          = $this->data['last_name'];
            $record->email              = $this->data['email'];
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Subscriber::find($this->data['id']);

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
