<?php
class Model_Task extends Model_Table {
    public $table = 'task';

    function init(){
        parent::init();

        $this->hasOne('User');
        $this->addField('week')->type('date');
        $this->addField('day')->type('date');
        $this->addField('project');
        $this->addField('task')->type('text');
        $this->addField('hours');

    }
}
