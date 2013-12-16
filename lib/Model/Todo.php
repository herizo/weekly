<?php
class Model_Todo extends Model_Table {
    public $table = 'todo';
    function init(){
        parent::init();

        $this->addField('project');
        $this->addField('task')->type('text');
        $this->addField('priority')->enum(array('URGENT', 'HIGHT' ,'MEDIUM', 'LOW'));
        $this->addField('done')->type('boolean')->defaultValue(false)->sortable(true);
        $this->hasOne('User')->caption('Assigned to');
    }
}
