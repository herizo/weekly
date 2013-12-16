<?php
class page_tasks extends Page {
    function init(){
        parent::init();

        $tips = $this->add('View_Info');
        $tips->add('Text')->set('Use the Quicksearch to filter by user name or by project name');

        $c = $this->add('CRUD');
        $c->setModel('Task');
        if($c->grid){
            $c->grid->addQuickSearch(array('project', 'user', 'task'));
            $c->grid->addTotals(array('hours'));
        }
    }
}
