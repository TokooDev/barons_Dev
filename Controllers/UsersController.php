<?php
session_start();
class UsersController extends Controller {
    public  function __construct(){
        $this->usersModel=new UsersModel();
      
     }
    public function index(){
        $this->view="login";
         $this->render();

    }
    
    public function login(){
    // On vérifie si le formulaire est complet
    if(isset($_POST['loginbtn'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        if(!empty($login) && !empty($password)){
            $this->usersModel->findUserByLoginAndPassword($login,$password);
            if($this->usersModel->totalRowCount($login,$password) > 0){
                // On envoie un message de session
                $this->view="chambres";
                $this->render();
            }else{
            $_SESSION['erreurMessage']='Le login et/ou le mot de passe est incorrect';
            $this->index();
            }
        }else{
            $_SESSION['erreurMessage']='Remplissez votre login et votre mot de passe';
            $this->index();
        }

    }
}
}
?> 
