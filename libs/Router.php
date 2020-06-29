<?php
class Router{
 private $ctrl;
 //Url => index.php?url=security/index
 //Reecrire URL =>security/index
    function route(){

        try{
            spl_autoload_register(function($class){
                $pathModels="./Models/".$class.".php";
                $pathLibs="./libs/".$class.".php";
                if(file_exists($pathModels)){
                    require_once( $pathModels);
                }elseif(file_exists( $pathLibs)){
                 require_once( $pathLibs); 
             }     
             });

if(isset($_GET['url'])){
                $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                  //Classe Controller
                  $ctrl= ucfirst(strtolower($url[0]))."Controller";
                  $pathCtrl="./Controllers/".$ctrl.".php";
                    if(file_exists($pathCtrl)){
                        require_once($pathCtrl);
                        //Instancier un Objet Controller
                        $this->ctrl=new $ctrl();
                        $action=$url[1];
                        if(method_exists($this->ctrl, $action)){
                          //Action Existe dans le Controller
                           $this->ctrl->{$action}();
                        }else{
                          echo "Cette Methode n'existe Pas";
                        }
                        
                    }else{
                        echo "Ce controller n'existe Pas";
                    }
             }else{
                $pathCtrl="./Controllers/UsersController.php";
                require_once($pathCtrl);
                $this->ctrl=new UsersController();
                $this->ctrl->index();
             }
             
        }catch(Exception $ex){

        }
       
    }
}