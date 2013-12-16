<?php
class page_users extends Page{
    function init(){
        parent::init();

        $c = $this->add('CRUD');
        $c->setModel('User');
    }
}
