<?php
class Model_User extends Model_Table {
    public $table = 'user';
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('password')->type('password');
        $this->addField('title');
        $this->addField('level')->enum(array('Manager', 'Worker'));

        $this->hasMany('Task');
        $this->hasMAny('Todo');
    }
}
