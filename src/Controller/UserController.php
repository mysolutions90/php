<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Description of UsuarioController
 *
 * @author jpmca
 */
class UserController extends AppController {
    
    public function index()
    {
       $users = $this -> Users -> find('all');
       $this ->set('users','$users');    
       
    }
    
    public function view()
    {
        echo "Detalle de usuario";
        exit();
    }
}
