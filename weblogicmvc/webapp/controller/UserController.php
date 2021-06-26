<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Controllers\BeanController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class UserController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução do utilizador/user
    public function store()
    {

    $dados = [
            'fullname' => Post::get('fullname'),
            'nif' => Post::get('nif'),
            'birthdate' => Post::get('birthdate'),
            'email' => Post::get('email'),
            'phone' => Post::get('phone'),
            'username'=>  Post::get('username'),
            'password' => Post::get('password')
            ];

        $utilizador = new user ($dados);
        $utilizador->save();

  //redireciona para a pagina de login/iniciar sessão após ter inserido os dados
       Redirect::toRoute('home/login');

    }
    public function start(){


    }


    /**
     * @return mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // TODO: Implement show() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {}
      /*  $book = R::load( 'book', $id );/*
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($id)
    {


    }
        /*$id = R::store( $car );



    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        /*

         = R::load( '', $id );
        R::trash(  );*/
    }
}