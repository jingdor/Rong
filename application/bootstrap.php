<?php
/**
 * Class Bootstrap
 */
use \Suin\Yaf\Twig\Twig;


class Bootstrap extends Yaf_Bootstrap_Abstract
{

    public function _initErrorReport(){
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
    public  function  _initAsset(Yaf_Dispatcher $dispatcher){
//            如果是开发环境则返回
//             $conf= Yaf_Application::app()->getConfig();
//             $modules=$conf->application->toArray()['modules'];
//             $defaultModule=$conf->application->toArray()['dispatcher']['defaultModule'];
//             $modules=explode(',',$modules);
//             foreach($modules as $key=>$val){
//                 if ($val==$defaultModule)
//                      continue;
//                 $modulesDir=APP_PATH.'/application/modules/'.$val;
//                 $modulesControllersDir=$modulesDir.'/controllers';
//                 $modulesAssetDir=scandir($modulesControllersDir);
//                     foreach($modulesAssetDir as $key=>$dir){
//                         if ($dir=='.' ||  $dir== '..')
//                             continue;
//                                 $dirinfo=pathinfo($dir);
//                                 $modulesViewDir=$modulesDir.'/views';
//                                 $modulesViewScanDir=scandir($modulesViewDir);
//                                 foreach($modulesViewScanDir as $key=>$viewDir){
//                                     if ($viewDir=='.' ||  $viewDir== '..'  ||$viewDir== 'layout' || $viewDir== 'part')
//                                         continue;

//                                     //复制合并css 文件
//                                             return ;
// //                                                var_dump( $modulesViewDir.'/'.$viewDir.'/asset');
//                                 }

//                     }
//             }

    }
    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {

    }


    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $Twig = new TwigPlugin();
        $dispatcher->registerPlugin($Twig);
    }



    //test
    public  function  _initRoute(Yaf_Dispatcher $dispatcher){
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        $route = new Yaf_Route_Rewrite(
            'product/:ident',
            array(
                'module'=>'frontend',
                'controller' => 'Index',
                'action' => 'index'));
           //使用路由器装载路由协议
       $router->addRoute('product', $route);
                $dispatcher->disableView();


    }
    protected function _initTwig(Yaf_Dispatcher $dispatcher)
    {

    }
}
    