<?php

namespace App\Commands\Admin\General;

use Illuminate\Console\Command;
use App\Http\DB\Menu;

class MenuStoreCommand extends Command
{
    public $data;
    public $request;
    public $operation = 'new';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($data, $request, $operation = 'new')
    {
        $this->data = $data;
        $this->request = $request;
        $this->operation = $operation;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        //Create new entry in database if operation = 'new'
        if ($this->operation == 'new') {

           

            $record = new Menu;
            $record->parent_menu_id     = $this->data['parent_menu_id'];
            $record->page_id            = $this->data['page_id'];
            // $record->post_category_id   = @($this->data['post_category_id'])?$this->data['post_category_id']:null;
            // $record->category_id        = $this->data['category_id'];
            $record->name               = $this->data['name'];
            $record->slug               = $this->data['slug'];
            $record->menu_type          = $this->data['menu_type'];
            $record->sequence_number    = ( Menu::max('sequence_number') + 1 );
            $record->status             = $this->data['status'];
            $record->save();
            return true;

        } else if ($this->operation == 'edit') {

            $record = Menu::find($this->data['id']);
            
            $record->parent_menu_id         = $this->data['parent_menu_id'];
            $record->page_id                = $this->data['page_id'];
            // $record->post_category_id       = @($this->data['post_category_id'])?$this->data['post_category_id']:null;
            // $record->category_id            = $this->data['category_id'];
            $record->name                   = $this->data['name'];
            $record->slug                   = $this->data['slug'];
            $record->menu_type              = $this->data['menu_type'];
            // $record->sequence_number        = ( Menu::max('sequence_number') + 1 );
            $record->status                 = $this->data['status'];
            $record->save();

            return true;
        } else if ($this->operation == 'delete') {
            //Check for exists in other tables or not?
            //Get record and delete it.
            $record = Menu::find($this->data['id']);
            $result = $record->delete();

            if ($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
