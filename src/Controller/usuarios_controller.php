<?php
namespace App\Controller;
class UsuariosController extends AppController{
    var $name = 'Usuarios';
    function index(){
        $this ->set('usuarios', $this ->Usuario->find('all'));
    }
    }

