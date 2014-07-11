<?php


/**
 * Class IndexController
 */
class IndexController extends Yaf_Controller_Abstract {



    public  function  init(){

    }
    public function indexAction() {//默认Action
        $this->display('index',array('username'=>time()));
    }
}
