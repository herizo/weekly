<?php
class page_todo extends Page {
    function init(){
        parent::init();

        $tips = $this->add('View_Info');
        $tips->add('Text')->set('Use the Quicksearch to filter by user name or by project name');

        $m = $this->add('Model_Todo');

        $c = $this->add('CRUD');
        $c->setModel($m);
        if($c->grid){
            $c->grid->addQuickSearch(array('project','user'));
        }

    }
}
