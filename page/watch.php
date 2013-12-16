<?php
class page_watch extends Page {
    function init(){
        parent::init();

        if($_GET['user']){
            $this->api->stickyGEt('user');

            $filter = $this->add('Form');
            $filter->addField('DatePicker', 'week');
            $filter->js('change', $filter->js()->submit());

            $m = $this->add('Model_User')->load($_GET['user']);
            $task = $m->ref('Task');

            if($_GET['week']){
                $task->addCondition('week', $_GET['week']);
            }

            $g = $this->add('Grid');
            $g->setModel($task);
            $g->addTotals(array('hours'));
            //$g->addOrder()->move('week','first')->now();

            if($filter->isSubmitted()){
                $g->js()->reload(array('week' => $filter->get('week') ) )->execute();
            }
        }

    }
}
