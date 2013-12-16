<?php
class page_mytodo extends Page {
    function init(){
        parent::init();

        $user = $this->api->auth->model;

        $m =  $user->ref('Todo');
        $m->addCondition('done', false);
        $g = $this->add('Grid');
        $g->setModel($m);
        $g->addColumn('button', 'done', 'Task Done');

        if($_GET['done']){

            $this->add('Model_Todo')->load($_GET['done'])->set('done', true)->save();
            $g->js()->reload()->execute();
        }
    }
}
