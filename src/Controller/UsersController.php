<?php

namespace App\Controller;
use App\Controller\AppController;
/**
 * Description of UsuarioController
 *
 * @author jpmca
 */
class UsersController extends AppController {
    
    public function index()
    {
       $user = $this -> Users -> find('all');
       $this ->set('user','$user');    
       
    }
    
    public function view()
    {
        echo "Detalle de usuario";
        exit();
    }
}