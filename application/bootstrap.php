<?php
/**
 * Class Bootstrap
 */
use \Suin\Yaf\Twig\Twig;


class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public  function  _initAsset(Yaf_Dispatcher $dispatcher){
//            如果是开发环境则返回
            $conf= Yaf_Application::app()->getConfig();
            $modules=$conf->application->toArray()['modules'];
            $defaultModule=$conf->application->toArray()['dispatcher']['defaultModule'];
            $modules=explode(',',$modules);
            foreach($modules as $key=>$val){
                if ($val==$defaultModule)
                     continue;
                $modulesDir=APP_PATH.'/application/modules/'.$val;
                $modulesControllersDir=$modulesDir.'/controllers';
                $modulesAssetDir=scandir($modulesControllersDir);
                    foreach($modulesAssetDir as $key=>$dir){
                        if ($dir=='.' ||  $dir== '..')
                            continue;
                                $dirinfo=pathinfo($dir);
                                $modulesViewDir=$modulesDir.'/views';
                                $modulesViewScanDir=scandir($modulesViewDir);
                                foreach($modulesViewScanDir as $key=>$viewDir){
                                    if ($viewDir=='.' ||  $viewDir== '..'  ||$viewDir== 'layout' || $viewDir== 'part')
                                        continue;

                                    //复制合并css 文件
                                            return ;
                                                var_dump( $modulesViewDir.'/'.$viewDir.'/asset');
                                }

                    }
            }

    }
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
    