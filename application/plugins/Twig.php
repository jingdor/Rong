<?php
use \Suin\Yaf\Twig\Twig;
class TwigPlugin extends Yaf_Plugin_Abstract {
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

    }

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        $config = Yaf_Application::app()->getConfig();
        $dispatcher= Yaf_Dispatcher::getInstance();
        if($request->module==$config->application->toArray()['dispatcher']['defaultModule']){
            $dispatcher->setView(new Twig(APP_PATH.'/application/views', $config->twig->toArray()));
        }else{
                $dispatcher->setView(new Twig(APP_PATH.'/application/modules/'.$request->module.'/views', $config->twig->toArray()));
            }

    }
}