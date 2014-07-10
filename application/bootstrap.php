<?php
/**
 * Class Bootstrap
 */
use \Suin\Yaf\Twig\Twig;


class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {

    }



    public function _initPlugin(Yaf_Dispatcher $dispatcher) {



        $Twig = new TwigPlugin();
        $dispatcher->registerPlugin($Twig);
    }


    public  function  _initRoute(Yaf_Dispatcher $dispatcher){
                $dispatcher->disableView();
    }
    protected function _initTwig(Yaf_Dispatcher $dispatcher)
    {

    }
}
    