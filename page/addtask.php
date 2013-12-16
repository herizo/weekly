<?php
class page_addtask extends Page {
    function init(){
        parent::init();

        if($_GET['user']){
            $this->api->stickyGET('user');

            $user = $this->add('Model_User')->load($_GET['user']);
            $m = $user->ref('Task');
            $f = $this->add('Form');
            $f->setModel($m);

            $f->addSubmit();

            if($f->isSubmitted()){
               $f->update();
               $this->api->js()->univ()->redirect($this->api->url('index'))->execute();
            }
        }
    }
}
