<?php
class Frontend extends ApiFrontend {
    function init(){
        parent::init();

        $this->dbConnect();

        $this->addLocation('atk4-addons',array(
                    'php'=>array(
                        'mvc',
                        'misc/lib',
                        ))

        )->setParent($this->pathfinder->base_location);

        $this->add('jUI');

        $this->add('Auth')->setModel('User', 'name', 'password');

        $this->auth->check();

        $menu = $this->add('Menu',null,'Menu');
        $menu->addMenuItem('index','Home');
        $menu->addMenuItem('mytodo', 'My todo List');

        if($this->auth->model->get('level') == 'Manager'){
            $menu->addMenuItem('users');
            $menu->addMenuItem('todo', 'All To Do list');
            $menu->addMenuItem('tasks', 'All tasks done');
        }

        $menu->addMenuItem('logout');
    }
}
