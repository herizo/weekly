<?php
class page_index extends Page {
    function init(){
        parent::init();
        $g = $this->add('Grid');
        $m = $this->add('Model_User');
        if($this->api->auth->model->get('level') != 'Manager'){
            $m->addCondition('id', $this->api->auth->model->id);
        }

        $g->setModel($m, array('name', 'title'));
        $g->addColumn('button', 'watch', 'Watch');

        $g->addColumn('button', 'add', 'Add Task Done');

        if($id =$_GET['watch']){
            $this->js()->univ()->frameURL('Watch', 
                $this->api->url('watch', array('user' => $id))
            )->execute();
        }

        if($_GET['add']){
            $this->js()->univ()->frameURL('add Task',
                $this->api->url('addtask', array('user' => $_GET['add']))
                )->execute();
        }
    }
}
