<?php

namespace App\Commands\Admin\General;

use Illuminate\Console\Command;
use App\Http\DB\FooterLink;

class FooterLinkStoreCommand extends Command
{
    public $data;
    public $request;
    public $operation = 'new';

    /**
     * @param $data
     * @param string $operation
     */
    public function __construct($data, $request, $operation = 'new')
    {
        $this->data = $data;
        $this->request = $request;
        $this->operation = $operation;
    }

    public function handle()
    {    

        //Create new entry in database if operation = 'new'
        if ($this->operation == 'new') {

            $record = new FooterLink;

            $record->create_by          = $this->data['create_by'];
            $record->update_by          = @($this->data['update_by']) ? $this->data['update_by'] : null;
            $record->page_id            = $this->data['page_id'];
            $record->post_category_id   = $this->data['post_category_id'];
            $record->name               = $this->data['name'];
            $record->slug               = $this->data['slug'];
            $record->menu_type          = $this->data['menu_type'];
            $record->sequence_number    = $this->data['sequence_number'];
            $record->status             = $this->data['status'];
            $record->column_number      = $this->data['column_number'];
            $record->save();
            return true;

        } else if ($this->operation == 'edit') {

            $record = FooterLink::find($this->data['id']);

            $record->update_by              = $this->data['update_by'];
            $record->page_id                = $this->data['page_id'];
            $record->post_category_id       = $this->data['post_category_id'];
            $record->name                   = $this->data['name'];
            $record->slug                   = $this->data['slug'];
            $record->menu_type              = $this->data['menu_type'];
            $record->sequence_number        = $this->data['sequence_number'];
            $record->status                 = $this->data['status'];
            $record->column_number          = $this->data['column_number'];
            $record->save();

            return true;
        } else if ($this->operation == 'delete') {
            //Check for exists in other tables or not?
           //Get record and delete it.
            $record = FooterLink::find($this->data['id']);
            $result = $record->delete();

            if ($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}