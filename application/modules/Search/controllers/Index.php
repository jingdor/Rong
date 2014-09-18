<?php


/**
 * Class IndexController
 */
class IndexController extends Yaf_Controller_Abstract {

    public  function  init(){

    }

    public function indexAction() {//默认Action
            echo('你要搜索').$_GET['words'].'吗?';
    }
}
